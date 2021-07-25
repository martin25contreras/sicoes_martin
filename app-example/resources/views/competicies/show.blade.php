@extends('layouts.plantilla')

@section('title', 'Curso '. $competicies->nombre_competencia)

@section('content')
    <h1>bienvenido al competicies: {{ $competicies->nombre_competencia; }}</h1>
    <a href="{{ route('competicies.index')}}">Volver a competicies</a><br>
    <a href="{{ route('competicies.edit', $competicies)}}">Editar competicies</a>


    <p>
        <strong>
            Año Escolar: {{$competicies->ano_escolar}}
        </strong>
        
    </p>
    <p>        
        Estatus: {{ $competicies->estatus }}
    </p>
@endsection
