@extends('layouts.plantilla')

@section('title', 'Curso '. $indicators->nombre)

@section('content')
    <h1>bienvenido al indicators: {{ $indicators->nombre; }}</h1>
    <a href="{{ route('indicators.index')}}">Volver a los Indicadores</a><br>
    <a href="{{ route('indicators.edit', $indicators)}}">Editar Indicadores</a>


    <p>
        <strong>
            Materia: {{$indicators->materia}}
        </strong>
        
    </p>
    <p>        
        Estatus: {{ $indicators->estatus }}
    </p>
@endsection
