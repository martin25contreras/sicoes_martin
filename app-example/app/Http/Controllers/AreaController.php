<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Staff;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $area = Area::orderBy('grado','asc')->paginate();//Para paginar los registros

        return view('area.index', compact('area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('area.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      
        $area = Area::where('nombre', "=", $request->nombre_area)
                    ->where('grado', "=", $request->grado)
                    ->where('seccion', "=", $request->seccion)
                    ->get();

        
        if(!empty($area[0])){
            var_dump($area[0]);
        }else{
            $area = new Area();

            $area->nombre = $request->nombre_area;
            $area->carga_horaria = $request->carga_horaria;
            $area->grado = $request->grado;
            $area->seccion = $request->seccion;

            $area->save();

            return view('area.index', compact('area'));
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
        $area = Area::find($id);

        return view('area.show', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area){
    
        return view('area.edit', compact('area'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area){
    
        $area = Area::where('nombre', "=", $request->nombre_area)
                    ->where('grado', "=", $request->grado)
                    ->where('seccion', "=", $request->seccion)
                    ->get();

        
        if(!empty($area[0])){
            var_dump($area[0]);
        }else{           
            $area = Area::find($request->id);

            $area->nombre = $request->nombre;
            $area->carga_horaria = $request->carga_horaria;
            $area->grado = $request->grado;
            $area->seccion = $request->seccion;

            $area->save();

            return redirect()->route('area.show', $area->id);
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
