<?php

namespace App\Http\Controllers;

use App\Models\AccessHistory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;

class AccessHistoryController extends Controller
{
    public function access_history(Request $request)
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
                        $where[] = [DB::raw("COALESCE(cast(historial_acceso.fecha_salida as date), current_date)"), '>=', $this->saveDate($request->date_in)];
                        $where[] = [DB::raw('cast(historial_acceso.fecha_entrada as date)'), '<=', $this->saveDate($request->date_out)];
                    }
                }

                $History = User::join('tipo_documento', 'tipo_documento.id', '=', 'users.tipo_documento_id')
                                ->leftJoin('historial_acceso', 'historial_acceso.usuario_id', '=', 'users.id')
                                ->select('users.id', 'historial_acceso.id as h_id', DB::raw("CONCAT(tipo_documento.abreviacion,'-', users.documento, ' ' ,users.nombre_usuario, ' ',users.apellido_usuario ) as full_name"), "historial_acceso.fecha_entrada", DB::raw("COALESCE(historial_acceso.fecha_salida, now()) as fecha_salida"), "historial_acceso.ip")
                                ->where($where)
                                ->orderBy('historial_acceso.id', 'DESC')
                                ->get()->toArray();
            }
            return view('access_history.access_history', compact('Users', 'History'));
        } else {
            return Redirect::to('home');
        }
    }
}
