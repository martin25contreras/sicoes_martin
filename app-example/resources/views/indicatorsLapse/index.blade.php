@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Bienvenidos a la pagina de Asignación de Indicadores</h1>
    <a href="{{ route('indicatorsLapse.create') }}">Crear Asignación</a>
    <ul>
        @foreach ($indicatorsLapse as $item)
            <li> 
                <a href="{{ route('indicatorsLapse.show', $item->id) }}">
                    {{ $item->id_competencia;}} - {{ $item->id_indicador;}} -{{ $item->lapso_escolar;}}
                </a>   
            </li>
        @endforeach
       
    </ul>
    {{ $indicatorsLapse ->links(); }}
@endsection
