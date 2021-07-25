<?php

namespace App\Http\Controllers;

use App\Models\Indicators;
use Illuminate\Http\Request;

class IndicatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicators = Indicators::orderBy('id','desc')->paginate();//Para paginar los registros


        return view('indicators.index', compact('indicators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('indicators.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $indicators = new Indicators();

        $indicators->nombre = $request->nombre;
        $indicators->materia = $request->materia;
        $indicators->estatus = $request->estatus;

        $indicators->save();

        return view('indicators.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicators = Indicators::find($id);

        return view('indicators.show', compact('indicators'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Indicators $indicators){
    
        /*$curs= indicators::find($id);

        return $indicators;*/
        return view('indicators.edit', compact('indicators'));
    
    }
    public function update(Request $request, Indicators $indicators){
        

        $indicators->nombre = $request->nombre;
        $indicators->materia = $request->materia;
        $indicators->save();

        return redirect()->route('indicators.show', $indicators->id);
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
