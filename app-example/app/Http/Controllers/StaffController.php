<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::orderBy('id','desc')->paginate();//Para paginar los registros

        return view('staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fechas = ' ';
        $fechas = explode("-", $request->fecha);

        $staff = new Staff();

        $staff->nombres = $request->nombres;
        $staff->apellidos = $request->apellidos;
        $staff->cedula = $request->cedula;
        $staff->direccion = $request->direccion;
        $staff->correo = $request->correo;
        $staff->telefono = $request->telefono;
        $staff->telefono_casa = $request->telefono_casa;
        $staff->dia_nacimiento = $fechas[2];
        $staff->mes_nacimiento = $fechas[1];
        $staff->ano_nacimiento = $fechas[0];
        $staff->cargo = $request->cargo;

        $staff->save();

        return view('staff.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff = Staff::find($id);

        return view('staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $fechas = ' ';
        $fechas = explode("-", $request->fecha);

        $staff->nombres = $request->nombres;
        $staff->apellidos = $request->apellidos;
        $staff->cedula = $request->cedula;
        $staff->direccion = $request->direccion;
        $staff->correo = $request->correo;
        $staff->telefono = $request->telefono;
        $staff->telefono_casa = $request->telefono_casa;
        $staff->dia_nacimiento = $fechas[2];
        $staff->mes_nacimiento = $fechas[1];
        $staff->ano_nacimiento = $fechas[0];
        $staff->cargo = $request->cargo;

        $staff->save();

        return redirect()->route('staff.show', $staff->id);
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
