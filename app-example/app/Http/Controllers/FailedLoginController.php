<?php

namespace App\Http\Controllers;

use App\Models\FailedLogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;

class FailedLoginController extends Controller
{
    public function failed_login(Request $request)
    {
        if (\Request::ajax()) {
            $Users = $this->getSelectListUsers();
            $History = array();
            if ($request->isMethod('post')) {
                $where[] = [DB::raw('1'), '1'];

                if ($request->user_id != null) {
                    $where[] = ['users.id', $request->user_id];
                }
                if ($request->date_in != null && $request->date_out != null) {
                    $Validator = \Validator::make(
                        $request->all(),
                        [
                                'date_in' => 'required',
                                'date_out' => 'required'
                                    ]
                    );
                    if (!$Validator->fails()) {
                        $where[] = [DB::raw("cast(intentos_login.fecha_inicio as date)"), '>=', $this->saveDate($request->date_in)];
                        $where[] = [DB::raw('cast(intentos_login.fecha_inicio as date)'), '<=', $this->saveDate($request->date_out)];
                    }
                }

                $History = User::join('tipo_documento', 'tipo_documento.id', '=', 'users.tipo_documento_id')
                                ->leftJoin('intentos_login', 'intentos_login.usuario_id', '=', 'users.id')
                                ->select('users.id', DB::raw("CONCAT(tipo_documento.abreviacion,'-', users.documento, ' ' ,users.nombre_usuario, ' ',users.apellido_usuario ) as full_name"), "intentos_login.fecha_inicio", "intentos_login.ip")
                                ->where($where)
                                ->orderBy('intentos_login.id', 'DESC')
                                ->get()->toArray();
            }
            return view('failed_login.failed_login', compact('Users', 'History'));
        } else {
            return Redirect::to('home');
        }
    }
}
