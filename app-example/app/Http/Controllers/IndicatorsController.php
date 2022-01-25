<?php

namespace App\Http\Controllers;

use App\Models\Indicators;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Exception;

class IndicatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicators = Indicators::all();

        return view('indicators.index', compact('indicators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (\Request::ajax()) {
            return view('indicators.create');
        } else {
            return Redirect::to('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'nombre.required'    => __('Indicador Requerido'),
            ];

            $validator = Validator::make($request->all(), [
                'nombre' => 'required',
            ], $messages);

            if ($validator->fails()) {
                $result['status'] = 0;
                $result['title'] = __('Indicators');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('indicators');
                return $result;
            } else {
                try {
                    $indicators = new Indicators();

                    $indicators->nombre = $request->nombre;
                    $indicators->materia = $request->materia;
                    $indicators->estatus = $request->estatus;
                    $indicators->save();

                    $result['status']       = 1;
                    $result['title']        = __('Indicators');
                    $result['message']      = __('Successfully Stored');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('indicators');
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Indicators');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('indicators');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (\Request::ajax()) {
            $item = Indicators::find($id);
            return view('indicators.edit', compact('item'));
        } else {
            return Redirect::to('home');
        }
    }
    public function update(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'nombre.required'    => __('Nombre de la Competencia Requerida'),
            ];

            $validator = Validator::make($request->all(), [
                'nombre'    => 'required',
            ], $messages);

            if ($validator->fails()) {
                $result['status']  = 0;
                $result['title']   = __('Indicators');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('indicators');
                return $result;
            } else {
                try {
                    $indicators = Indicators::find($request->id);

                    $indicators->nombre = $request->nombre;
                    // $indicators->materia = $request->materia;
                    $indicators->save();

                    $result['status']       = 1;
                    $result['title']        = __('Indicators');
                    $result['message']      = __('Updated');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('indicators');
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Indicators');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('indicators');
                }
                return $result;
            }
        } else {
            return Redirect::to('home');
        }
    }
}
