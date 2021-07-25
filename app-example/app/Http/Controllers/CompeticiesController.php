<?php

namespace App\Http\Controllers;

use App\Models\Competicies;
use Illuminate\Http\Request;

class CompeticiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competicies = Competicies::orderBy('id','desc')->paginate();//Para paginar los registros


        return view('competicies.index', compact('competicies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('competicies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $competicies = new Competicies();

        $competicies->nombre_competencia = $request->competencia;
        $competicies->estatus = 'Activo';
        $competicies->ano_escolar = $request->ano_escolar;

        $competicies->save();

        return view('competicies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $competicies = Competicies::find($id);

        return view('competicies.show', compact('competicies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Competicies $competicies){
    
        /*$curs= Competicies::find($id);

        return $competicies;*/
        return view('competicies.edit', compact('competicies'));
    
    }
    public function update(Request $request, Competicies $competicies){
        

        $competicies->nombre_competencia = $request->competencia;

        $competicies->save();

        return redirect()->route('competicies.show', $competicies->id);
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
