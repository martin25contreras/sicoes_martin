@extends('layouts.plantilla')

@section('title', 'Create Asignacion')

@section('content')
<?php 
    $c = 0;
    
    $asignadasArray = [];
    $index = 0;
?>
    <h1>En esta página podrás </h1>
    @foreach ($competicies_one as $item)
        <h2>Competencia: {{ $item->nombre_competencia; }}</h2>
    @endforeach
    <form action="{{ route('competicies.asigneIndicadores') }}" method="post"> 
        @csrf
        
            <h3>Seleccione el Área para Asignar incluir los indicadores</h3>
            @foreach ($competicies_one as $item)
            <input type="number" name="id_competencia" value="{{ $item->id; }}" hidden>
            @endforeach
            
            <label for="">Materia: <br> 
                <select name="id_materia" >
                    <option value="">Seleccione...</option>
                    @foreach ($area as $item)                    
                        <option value="{{ $item->id; }}"> {{ $item->nombre;}} {{ $item->grado;}}{{ $item->seccion;}}</option>
                    @endforeach
                </select>
            </label><br><br>   
            <label >Indicador</label>
            <input type="text" name="indicador" id=""/><br><br>
            <label for="">Lapso: <br> 
                <select name="lapso_escolar" >
                    <option value="">Seleccione...</option>
                    <option value="I">Primer Momento</option>
                    <option value="II">Segundo Momento</option>
                    <option value="II">Tercer Momento</option>
                </select>
            </label><br><br>  
            <input type="submit" value="Enviar">

    </form>
@endsection
