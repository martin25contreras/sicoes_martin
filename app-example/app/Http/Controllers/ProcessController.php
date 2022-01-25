<?php

namespace App\Http\Controllers;

use App\Models\Process;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Process = Process::all();
        return view('process.index', compact('Process'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (\Request::ajax()) {
            $Cod = Process::orderBy('id', "desc")->first();
            $Cde = $Cod['id'] + 1;
            $order = FullSerial($Cde, 1);

            $menu  = Menu::orderBy('id', "asc")->get();
            return view('Process.create', compact('order','menu'));
        } else {
            return Redirect::to('home');
        }
    }

    /**
     * Para la creacion de los procesos se debe realizar la respectiva traduccion en la ruta resources/lang/en.json o  resources/lang/es.json
     * Para ver el menu registrado en el sidebar se deben ir al modulo de permisos y darle permisos al perfil asignado al usuario
     * 
     **/
    public function store(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'name_process.required'    => __('Nombre del Proceso Requerida'),
                'route.required'           => __('Nombre de la ruta Requerida'),
                'description.required'     => __('Nombre de la Descripcion Requerida'),
                'menu.required'            => __('Nombre del Menu Requerida'),
            ];

            $validator = Validator::make($request->all(), [
                'name_process' => 'required|unique:procesos,nombre_proceso',
                'route'        => 'required|unique:procesos,route',
                'description'  => 'required',
                'menu'         => 'required',
            ], $messages);

            if ($validator->fails()) {
                $result['status'] = 0;
                $result['title'] = __('Process');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('process');
                return $result;
            } else {
                try {
                    $Process = new Process();
                    if (Auth::user()->special_permission == 1) {
                        $Process->nombre_proceso = strtolower($request->name_process);
                    }
                    $Process->descripcion = $request->description;
                    $Process->order       = $request->order;

                    if (Auth::user()->special_permission == 1) {
                        $Process->route   = strtolower($request->route);
                    }

                    if (Auth::user()->special_permission == 1) {
                        $Process->menu_id = strtolower($request->menu);
                    }
                    $Process->save();


                    $Process->order = FullSerial($Process->id, 1);
                    $Process->save();

                    $result['status']       = 1;
                    $result['title']        = __('Process');
                    $result['message']      = __('Successfully Stored');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('process');
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Process');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('process');
                }
                return $result;
            }
        } else {
            return Redirect::to('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (\Request::ajax()) {
            $item  = Process::find($id);
            $menu  = Menu::orderBy('id', "asc")->get();

            return view('Process.edit', compact('item','menu'));
        } else {
            return Redirect::to('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'name_process.required'    => __('Nombre del Proceso Requerida'),
                'route.required'           => __('Nombre de la ruta Requerida'),
                'description.required'     => __('Nombre de la Descripcion Requerida'),
                'menu.required'            => __('Nombre del Menu Requerida'),
            ];

            $validator = Validator::make($request->all(), [
                'name_process'    => 'required|unique:procesos,nombre_proceso,'.$request->id,
                'route'           => 'required|unique:procesos,route,'.$request->id,
                'description'     => 'required',
                'menu'            => 'required',

            ], $messages);

            if ($validator->fails()) {
                $result['status']  = 0;
                $result['title']   = __('Process');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('process');
                return $result;
            } else {
                try {
                    $Process = Process::find($request->id);
                    if (Auth::user()->special_permission == 1) {
                        $Process->nombre_proceso = strtolower($request->name_process);
                    }
                    $Process->descripcion =  $request->description;

                    if (Auth::user()->special_permission == 1) {
                        $Process->route   = strtolower($request->route);
                    }

                    if (Auth::user()->special_permission == 1) {
                        $Process->menu_id = strtolower($request->menu);
                    }
                    $Process->save();

                    $result['status']       = 1;
                    $result['title']        = __('Process');
                    $result['message']      = __('Updated');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('process');
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Process');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('process');
                }
                return $result;
            }
        } else {
            return Redirect::to('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function change_status($id, $action)
    {
        if (\Request::ajax()) {
            try {
                $item          = Process::find($id);
                $item->estatus = $action;
                $item->save();
                $msg           = $action == 0 ? __('Deleted') : __('Restored');

                $result['status']       = 1;
                $result['title']        = __('Process');
                $result['message']      = $msg;
                $result['type_message'] = 'success';
                $result['redirect']     = route('process');
            } catch (Exception $e) {
                $result['status']       = 0;
                $result['title']        = __('Process');
                $result['message']      = $e->getMessage();
                $result['type_message'] = 'error';
                $result['redirect']     = route('process');
            }
            return $result;
        } else {
            return Redirect::to('home');
        }
    }
}
