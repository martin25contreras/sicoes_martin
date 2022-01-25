<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Audit;
use App\Models\AccessHistory;
use App\Models\Process;
use App\Helpers\Encryptor;

class DataImportant
{
    protected $dataExclude = array('_token');
    protected $routeSaveDataGet = array('delete', 'reactivate', 'reset_password', 'delete_logged', 'change_status','lock_user','unlock_user');

    public function handle($request, Closure $next)
    {
        $position_point =  strpos(\Request::route()->getName(), '.');
        if ($position_point===false) {
            $nameRoute = \Request::route()->getName();
            $data = ['action'=>$nameRoute];
            $actionRouteGet = \Request::route()->getName();
        } else {
            $nameRoute = explode(".", \Request::route()->getName());
            $data = ['action'=>$nameRoute[1]];
            $actionRouteGet = $nameRoute[1];
            $nameRoute = $nameRoute[0];
        }
        $Process = Process::where('route', $nameRoute)->first();
        $AccessHistory = AccessHistory::whereNull('fecha_salida')->where('usuario_id', Auth::user()->id)->first();
        if ($AccessHistory != null && $Process != null) {
            $data = array();
            if ($request->isMethod('post')) {
                foreach ($request->all() as $key=>$value) {
                    if (!in_array($key, $this->dataExclude)) {
                        $data[$key] = $value==null ? '' : $value;
                    }
                    $data['action'] = $actionRouteGet;  

                }
            } else {
                if (in_array($actionRouteGet, $this->routeSaveDataGet)) {
                    foreach ($request->route()->parameters as $key=>$value) {
                        if (!in_array($key, $this->dataExclude)) {
                            if ($key == 'id') {
                                $value_aux = Encryptor::decrypt($value);
                            } else {
                                $value_aux = $value;
                            }
                            $data[$key] = $value_aux==null ? '' : $value_aux;
                        }
                    }
                }
            }
            if (count($data)>0) {
                $data['ip']        = $request->ip();
                $data['user_id']   = Auth::user()->id;
                $data['date']      = date('Y-m-d');
                $data['hour']      = date("H:i:s"); 
                $Audit   = new Audit();
                $Audit->historial_accseso_id = $AccessHistory->id;
                $Audit->fecha_acceso = now();
                $Audit->data_procesada = json_encode($data);
                $Audit->process_id = $Process->id;
                $Audit->save();
            }
        }        
        return $next($request);
    }
}