<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Exception;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $area = Area::all();

        return view('area.index', compact('area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (\Request::ajax()) {
            return view('area.create');
        } else {
            return Redirect::to('home');
        }
    }

    public function store(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'nombre.required'    => __('Nombre del Área Requerida'),
            ];

            $validator = Validator::make($request->all(), [
                'nombre' => 'required',
            ], $messages);

            if ($validator->fails()) {
                $result['status'] = 0;
                $result['title'] = __('Área');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('area');
            } else {
                try {
                    $area = new Area();

                    $area->nombre = $request->nombre;
                    $area->carga_horaria = $request->carga_horaria;
                    $area->grado = $request->grado;
                    $area->seccion = $request->seccion;
                    $area->save();

                    $result['status']       = 1;
                    $result['title']        = __('Área');
                    $result['message']      = __('Successfully Stored');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('area');
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Área');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('area');
                }
            }
            return $result;
        } else {
            return Redirect::to('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (\Request::ajax()) {
            $item = Area::find($id);
            return view('area.edit', compact('item'));
        } else {
            return Redirect::to('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'nombre.required'    => __('Nombre del Área Requerida'),
            ];

            $validator = Validator::make($request->all(), [
                'nombre'    => 'required',
            ], $messages);

            if ($validator->fails()) {
                $result['status']  = 0;
                $result['title']   = __('Área');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('area');
            } else {
                try {
                    $area = Area::find($request->id);
                    $area->nombre = $request->nombre;
                    $area->carga_horaria = $request->carga_horaria;
                    $area->grado = $request->grado;
                    $area->seccion = $request->seccion;
                    $area->save();

                    $result['status']       = 1;
                    $result['title']        = __('Área');
                    $result['message']      = __('Successfully Stored');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('area');
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Área');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('area');
                }
            }
            return $result;
        } else {
            return Redirect::to('home');
        }
    }
}
