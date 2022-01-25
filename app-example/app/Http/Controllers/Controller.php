<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use DB;
use File;
use View;
use App\Models\User;
use App\Models\LoggedUser;
use App\Models\AccessHistory;
use App\Models\Country;

class Controller extends BaseController
{
    use AuthorizesRequests;

    use DispatchesJobs;

    use ValidatesRequests;

    private $Avatars = [];

    public function getPathTimer()
    {
        return storage_path('app'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'time_inactivity');
    }

    public function saveDate($date)
    {
        $date = explode('/', $date);
        return $date[2].'-'.$date[1].'-'.$date[0];
    }

    public function getNameUser($username='')
    {
        if ($username!='') {
            $user_search = User::where('username', $username)->first();
            if ($user_search == null) {
                return $username;
            } else {
                return $this->getNameUser($username.rand(10, 99));
            }
        }
    }
    public function setClearString($cadena = '')
    {
        $cadena = str_replace(
            array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
            array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
            $cadena
        );

        //Reemplazamos la E y e
        $cadena = str_replace(
            array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
            array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
            $cadena
        );

        //Reemplazamos la I y i
        $cadena = str_replace(
            array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
            array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
            $cadena
        );

        //Reemplazamos la O y o
        $cadena = str_replace(
            array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
            array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
            $cadena
        );

        //Reemplazamos la U y u
        $cadena = str_replace(
            array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
            array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
            $cadena
        );

        //Reemplazamos la N, n, C y c
        $cadena = str_replace(
            array('Ñ', 'ñ', 'Ç', 'ç'),
            array('N', 'n', 'C', 'c'),
            $cadena
        );
        $cadena = preg_replace('([^A-Za-z0-9])', '', $cadena);
        return $cadena;
    }


    public function __construct()
    {

        //$defaultCountry = Country::where('default', true)->select('id')->pluck('id')->first();
        $defaultCountry = Country::where('default', true)->first()->toArray();
        View::share('defaultCountry', $defaultCountry['id']);

        $defaultCodeOperatorCountries = Country::find($defaultCountry['id']);
        $defaultCodeOperatorCountries = $defaultCodeOperatorCountries->getTelephoneOperators->pluck('code', 'id')->toArray();

        foreach ($defaultCodeOperatorCountries as $key=>$value) {
            $defaultCodeOperatorCountries[$key] = $defaultCountry['code_telefono'].' '.$value;
        }
        View::share('defaultCodeOperatorCountries', $defaultCodeOperatorCountries);


        $pathAvatar = storage_path('app/img/avatar/');
        $files = File::files($pathAvatar);
        //dd($files);
        foreach ($files as $key =>$value) {
            if ($value->getExtension() == 'png') {
                $this->Avatars[] = substr($value->getFileName(), 0, strpos($value->getFileName(), '.'));
            }
        }

        View::share('AVATARS', $this->Avatars);
    }


    public function getSelectListUsers()
    {
        return User::join('tipo_documento', 'tipo_documento.id', '=', 'users.tipo_documento_id')
                        ->select(DB::raw("CONCAT(tipo_documento.abreviacion,'-', users.documento, ' ' ,users.nombre_usuario, ' ',users.apellido_usuario ) as full_name"), 'users.id')
                        ->orderBy("full_name")->pluck('full_name', 'id');
    }

    public function endLogin($user_id)
    {
        LoggedUser::where('usuario_id', $user_id)->delete();

        $AccessHistory = AccessHistory::where('usuario_id', $user_id)->whereNull('fecha_salida');
        if ($AccessHistory != null) {
            $AccessHistory->update(['fecha_salida' => date('Y-m-d H:i:s')]);
        }
    }
    public function send_mail($mail_to, $template, $info_mail)
    {
        $data['info_mail'] = $info_mail;
        $data['template'] = $template;
        Mail::to($mail_to)->send(new TestMail($data));
    }
}
