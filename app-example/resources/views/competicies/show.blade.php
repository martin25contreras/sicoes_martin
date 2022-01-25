@extends('layouts.plantilla')

@section('title', 'Curso '. $competicies->nombre_competencia)

@section('content')
    <h1>bienvenido al competicies: {{ $competicies->nombre_competencia; }}</h1>
    <a href="{{ route('competicies.index')}}">Volver a competicies</a><br>
    <a href="{{ route('competicies.edit', $competicies)}}">Editar competicies</a><br>
    <a href="{{ route('competicies.asigne')}}">Agregar Indicadores</a>


    <p>
        <strong>
            Año Escolar: {{$competicies->ano_escolar}}
        </strong>
        
    </p>
    <p>        
        Estatus: {{ $competicies->estatus }}
    </p>
    <table border="1">
        <thead>
            <tr>
                <td>Competencia</td>
                <td>Indicador</td>
                <td>Materia</td>
                <td>Momento Escolar</td>
                <td>Año Escolar</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($competicies_one as $item)
            <tr> 
                <td>{{ $item->nombre_competencia;}}</td>
                <td>{{ $item->nombre_indicador;}}</td>
                <td>{{ $item->nombre;}}</td>
                <td>{{ $item->lapso_escolar;}}</td>
                <td>{{ $item->ano_escolar;}}</td>                  
            </tr>
            @endforeach
        </tbody> 
    </table>
@endsection
