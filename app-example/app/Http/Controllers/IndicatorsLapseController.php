<?php

namespace App\Http\Controllers;

use App\Models\Competicies;
use App\Models\Indicators;
use App\Models\IndicatorsLapse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Exception;

class IndicatorsLapseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicatorsLapse = IndicatorsLapse::all();//Para mostrar los registros
        // dd($indicatorsLapse);

        return view('indicatorsLapse.index', compact('indicatorsLapse'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //LLAMAMOS AL MODELO COMPETENCIAS
        $competicies       = Competicies::pluck('nombre_competencia', 'id');
        $indicators        = Indicators::pluck('nombre', 'id');

        return view('indicatorsLapse.create', compact('competicies', 'indicators'));
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
                'lapso_escolar.required'    => __('Lapso es Requerido'),
            ];

            $validator = Validator::make($request->all(), [
                // 'nombre_competencia'    => 'required|max:5|unique:competencies,nombre_competencia',
                'lapso_escolar' => 'required',
            ], $messages);

            if ($validator->fails()) {
                $result['status'] = 0;
                $result['title'] = __('Indicadores de Lapso');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('indicators_lapses');
                return $result;
            } else {
                try {
                    $indicatorsLapse = new IndicatorsLapse();
                    $indicatorsLapse->competencia_id = $request->id_competencia;
                    $indicatorsLapse->indicador_id = $request->id_indicador;
                    $indicatorsLapse->lapso_escolar = $request->lapso_escolar;
                    $indicatorsLapse->save();

                    $result['status']       = 1;
                    $result['title']        = __('Indicadores de Lapso');
                    $result['message']      = __('Successfully Stored');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('indicators_lapses');
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Indicadores de Lapso');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('indicators_lapses');
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
    public function show($id)
    {
        //
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
            $competicies       = Competicies::pluck('nombre_competencia', 'id');
            $indicators        = Indicators::pluck('nombre', 'id');

            $item = IndicatorsLapse::find($id);

            return view('indicatorsLapse.edit', compact('item', 'competicies', 'indicators'));
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
                'id_indicador.required'    => __('Nombre de la Competencia Requerida'),
            ];

            $validator = Validator::make($request->all(), [
                'id_indicador'    => 'required',
                // 'nombre_competencia'    => 'required|max:5|unique:type_coins,symbol,'.$request->id,
            ], $messages);

            if ($validator->fails()) {
                $result['status']  = 0;
                $result['title']   = __('Indicadores de Lapso');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('indicators_lapses');
                return $result;
            } else {
                try {
                    $competicies = IndicatorsLapse::find($request->id);
                    $competicies->indicador_id = $request->id_indicador;
                    $competicies->save();

                    $result['status']       = 1;
                    $result['title']        = __('Indicadores de Lapso');
                    $result['message']      = __('Updated');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('indicators_lapses');
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Indicadores de Lapso');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('indicators_lapses');
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
