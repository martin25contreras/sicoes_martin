@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Bienvenidos a la pagina de Competencias</h1>
    <a href="{{ route('competicies.create') }}">Crear Competencias</a>
    <ul>
        @foreach ($competicies as $item)
            <li> 
                <a href="{{ route('competicies.show', $item->id) }}">
                    {{ $item->nombre_competencia;}}
                </a>   
            </li>
        @endforeach
       
    </ul>
    {{ $competicies ->links(); }}
@endsection
