<?php

namespace App\Http\Controllers;

use App\Models\Competicies;
use App\Models\Indicators;
use App\Models\IndicatorsLapse;
use Illuminate\Http\Request;

class IndicatorsLapseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicatorsLapse = IndicatorsLapse::orderBy('id','desc')->paginate();//Para paginar los registros

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
        $competicies = Competicies::all();
        $indicators = Indicators::all();

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
        $indicatorsLapse = new IndicatorsLapse();

        $indicatorsLapse->id_competencia = $request->id_competencia;
        $indicatorsLapse->id_indicador = $request->id_indicador;
        $indicatorsLapse->lapso_escolar = $request->lapso_escolar;

        $indicatorsLapse->save();

        return view('indicatorsLapse.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
