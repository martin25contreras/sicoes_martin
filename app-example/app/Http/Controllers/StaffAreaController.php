<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Staff;
use App\Models\StaffArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffAreaController extends Controller
{
    /**
     * AQUI HAY QUE AGREGAR EL ID DE CADA UNA DE LAS MATERIAS INTEGRALES
     * matematica, lenguaje, ciencia naturales, ciencia sociales, estetica, ser y vivir 
     * DE LAS 3 SECCIONES
     */
    protected $ListadoAreaIntegrales = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffarea = DB::table('staff_has_area')
                    ->join('area', 'area.id', '=', 'staff_has_area.id_area')
                    ->join('staff', 'staff.cedula', '=', 'staff_has_area.cedula_personal')
                    ->select('area.nombre', 'staff.nombres', 'staff.apellidos', 'staff.cargo')
                    ->get();
        return view('Staffarea.index', compact('staffarea'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staff = Staff::all();        

        return view('Staffarea.create', compact('staff'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->personal;
        $staff = Staff::where('cedula', '=', $id)->get();
        $area = Area::all();
        $staffarea = DB::table('staff_has_area')
                    ->join('area', 'area.id', '=', 'staff_has_area.id_area')
                    ->select('staff_has_area.id_area')
                    ->get();
        $error = ' ';

        return view('Staffarea.show', compact('staff', 'area', 'staffarea', 'error'));
    }
    public function asigne(Request $request)
    {
        $areasAsignadas = [];
        $contadorAreas=0;
        $staffarea2 = DB::table('staff_has_area')
                    ->join('area', 'area.id', '=', 'staff_has_area.id_area')
                    ->select('staff_has_area.id_area')
                    ->get();

        foreach($staffarea2 as $item){
            $areasAsignadas[$contadorAreas] = $item->id_area;
            $contadorAreas++;
        }        
       
        $existe = false;
        for ($index=0; $index < count($request->array); $index++) { 
            $staffarea = new StaffArea();
            $staffarea->cedula_personal = $request->cedula;
            $staffarea->id_area = $request->array[$index];

            $contadorAreas=0;
            
            $existe = false;

            for ($index2=0; $index2 < count($this->ListadoAreaIntegrales); $index2= $index2+3) {                
                
                if( $request->array[$index] == $this->ListadoAreaIntegrales[$index2]){
                    if($areasAsignadas[$contadorAreas] == $this->ListadoAreaIntegrales[$index2+1] || 
                        $areasAsignadas[$contadorAreas] == $this->ListadoAreaIntegrales[$index2+2])
                        $existe = true;                                       
                } else
                    if( $request->array[$index] == $this->ListadoAreaIntegrales[$index2+1]){
                        if($areasAsignadas[$contadorAreas] == $this->ListadoAreaIntegrales[$index2] || 
                            $areasAsignadas[$contadorAreas] == $this->ListadoAreaIntegrales[$index2+2])
                            $existe = true;                                         
                    }  
                    else
                        if( $request->array[$index] == $this->ListadoAreaIntegrales[$index2+2]){
                            if($areasAsignadas[$contadorAreas] == $this->ListadoAreaIntegrales[$index2+1] || 
                                $areasAsignadas[$contadorAreas] == $this->ListadoAreaIntegrales[$index2])
                                $existe = true;                                             
                        }  
                $contadorAreas++;
            }
            if($existe == false ){
                $staffarea->save();

                $staffarea = DB::table('staff_has_area')
                    ->join('area', 'area.id', '=', 'staff_has_area.id_area')
                    ->join('staff', 'staff.cedula', '=', 'staff_has_area.cedula_personal')
                    ->select('area.nombre', 'staff.nombres', 'staff.apellidos', 'staff.cargo')
                    ->get();
                return view('Staffarea.index', compact('staffarea'));
            }
            else {
                $id = $request->cedula;
                $error = "No puedes tener mas materias integrales iguales";
                $staff = Staff::where('cedula', '=', $id)->get();
                $area = Area::all();
                $staffarea = DB::table('staff_has_area')
                            ->join('area', 'area.id', '=', 'staff_has_area.id_area')
                            ->select('staff_has_area.id_area')
                            ->get();

                return view('Staffarea.show', compact('staff', 'area', 'staffarea', 'error'));
                
            }
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->personal;
        $staff = Staff::find($id);

        return view('Staffarea.show', compact('staff'));
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
