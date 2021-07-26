@extends('layouts.plantilla')

@section('title', 'Curso '. $indicatorsLapse->nombre)

@section('content')
    <h1>bienvenido al indicators: {{ $indicatorsLapse->nombre; }}</h1>
    <a href="{{ route('indicatorsLapse.index')}}">Volver a los Indicadores</a><br>
    <a href="{{ route('indicatorsLapse.edit', $indicatorsLapse)}}">Editar Indicadores</a>


    <p>
        <strong>
            Materia: {{$indicatorsLapse->materia}}
        </strong>
        
    </p>
    <p>        
        Estatus: {{ $indicatorsLapse->estatus }}
    </p>
@endsection
