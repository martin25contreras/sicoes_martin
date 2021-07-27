@extends('layouts.plantilla')

@section('title', 'Index Area')

@section('content')
    <h1>Bienvenidos a la pagina de las Áreas</h1>
    <a href="{{ route('area.create') }}">Registrar Área</a>
    
    <br><br>
    <table border="1">
        <thead>
            <tr>
                <td>Área de Formación</td>
                <td>Grado</td>
                <td>Sección</td>
                <td>Carga Horaria</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($area as $item)
            <tr> 
                <td>{{ $item->nombre;}}</td>
                <td>{{ $item->grado;}}</td>
                <td>{{ $item->seccion;}}</td>
                <td>{{ $item->carga_horaria;}}</td>
                <td> 
                    <a href="{{ route('area.show', $item->id) }}">
                        Editar
                    </a>
                </td>
                  
            </tr>
        @endforeach
        </tbody>
    </table> 
    {{ $area ->links(); }} 
@endsection
