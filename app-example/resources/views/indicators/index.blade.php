@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Bienvenidos a la pagina de Indicadores</h1>
    <a href="{{ route('indicators.create') }}">Crear Indicadores</a>
    <ul>
        @foreach ($indicators as $item)
            <li> 
                <a href="{{ route('indicators.show', $item->id) }}">
                    {{ $item->nombre;}}
                </a>   
            </li>
        @endforeach
       
    </ul>
    {{ $indicators ->links(); }}
@endsection
