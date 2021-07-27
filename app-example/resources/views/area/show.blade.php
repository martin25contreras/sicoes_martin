@extends('layouts.plantilla')

@section('title', 'Materia: '. $area->nombre)

@section('content')
    <h1>bienvenido a la Materia: {{ $area->nombre}}</h1>
    <a href="{{ route('area.index')}}">Volver</a><br>
    <a href="{{ route('area.edit', $area)}}">Editar Área de Formación</a>


    <p>
        <strong>
            Grado y Sección: {{$area->grado}} {{$area->seccion}}
        </strong>        
    </p>
    <p>
        <strong>
            Carga Horaria: {{$area->carga_horaria}}
        </strong>        
    </p>
    
    </p>
@endsection
