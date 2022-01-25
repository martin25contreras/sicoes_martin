<?php

namespace App\Http\Controllers;

use App\Models\RestrictedAccess;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;

class RestrictedAccessController extends Controller
{
    public function restricted_access(Request $request)
    {
        if (\Request::ajax()) {
            $Users = $this->getSelectListUsers();
            $History = array();
            if ($request->isMethod('post')) {
                $History = User::query()
                        ->join('tipo_documento', 'tipo_documento.id', '=', 'users.tipo_documento_id')
                        ->join('restriccion_acceso', 'restriccion_acceso.usuario_id', '=', 'users.id')
                        ->join('procesos', 'procesos.id', '=', 'restriccion_acceso.process_id');

                if ($request->user_id != null) {
                    $History = $History->where('users.id', '=', $request->user_id);
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
                        $History = $History->whereDate('restriccion_acceso.fecha_inicio', '>=', $this->saveDate($request->date_in));
                        $History = $History->whereDate('restriccion_acceso.fecha_inicio', '<=', $this->saveDate($request->date_out));
                    }
                }
                $History = $History->orderBy("restriccion_acceso.fecha_inicio", "DESC")
                            ->select('users.id', DB::raw("CONCAT(tipo_documento.abreviacion,'-', users.documento, ' ' ,users.nombre_usuario, ' ',users.apellido_usuario ) as full_name"), "restriccion_acceso.fecha_inicio", "restriccion_acceso.ip", "procesos.nombre_proceso")
                            ->get()->toArray();
            }
            return view('restricted_access.restricted_access', compact('Users', 'History'));
        } else {
            return Redirect::to('home');
        }
    }
}
