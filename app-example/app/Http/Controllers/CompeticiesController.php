<?php

namespace App\Http\Controllers;

use App\Models\Competicies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Exception;

class CompeticiesController extends Controller
{
    /**
     * Mostrar los registros
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competicies = Competicies::all();
        return view('competicies.index', compact('competicies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (\Request::ajax()) {
            return view('competicies.create');
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
                'nombre_competencia.required'    => __('Nombre de la Competencia Requerida'),
            ];

            $validator = Validator::make($request->all(), [
                // 'nombre_competencia'    => 'required|max:5|unique:competencies,nombre_competencia',
                'nombre_competencia' => 'required',
            ], $messages);

            if ($validator->fails()) {
                $result['status'] = 0;
                $result['title'] = __('Competencias');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('competicies');
                return $result;
            } else {
                try {
                    $competicies = new Competicies();
                    $competicies->nombre_competencia = $request->nombre_competencia;
                    $competicies->estatus            = 'Activo';
                    $competicies->ano_escolar        = $request->ano_escolar;
                    $competicies->save();

                    $result['status']       = 1;
                    $result['title']        = __('Competencias');
                    $result['message']      = __('Successfully Stored');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('competicies');
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Competencias');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('competicies');
                }
                return $result;
            }
        } else {
            return Redirect::to('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (\Request::ajax()) {
            $item = Competicies::find($id);
            return view('competicies.edit', compact('item'));
        } else {
            return Redirect::to('home');
        }
    }

    public function update(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'nombre_competencia.required'    => __('Nombre de la Competencia Requerida'),
            ];

            $validator = Validator::make($request->all(), [
                'nombre_competencia'    => 'required',
                // 'nombre_competencia'    => 'required|max:5|unique:type_coins,symbol,'.$request->id,
            ], $messages);

            if ($validator->fails()) {
                $result['status']  = 0;
                $result['title']   = __('Competencias');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('competicies');
                return $result;
            } else {
                try {
                    $competicies = Competicies::find($request->id);
                    $competicies->nombre_competencia = $request->nombre_competencia;
                    $competicies->save();

                    $result['status']       = 1;
                    $result['title']        = __('Competencias');
                    $result['message']      = __('Updated');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('competicies');
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Competencias');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('competicies');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
