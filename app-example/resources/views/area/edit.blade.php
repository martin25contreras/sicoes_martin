@extends('layouts.plantilla')

@section('title', 'Area Edit')

@section('content')
    <h1>En esta pagina podras editar su Indicador</h1>

    <form action="{{ route('area.update', $area) }}" method="post"> 
        
        @csrf

        @method('put')

        <input type="text" name="id" value="{{ $area->id; }}" hidden>

        <label for="">Nombre del Área: <br> 
            <input type="text" name="nombre" value="{{ $area->nombre; }}">
        </label><br><br>  

        <label for="">Carga Horaria: <br> 
            <input type="number" name="carga_horaria" min="1" value="{{ $area->carga_horaria; }}">
        </label><br><br>  
        
        <label for="">Grado: <br> 
            <select name="grado">
                <option value="{{ $area->grado; }}">{{ $area->grado; }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </label><br><br> 
        <label for="">Sección: <br> 
            <select name="seccion">
                <option value="{{ $area->seccion; }}"> {{ $area->seccion; }}</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>
        </label><br><br> 
        <br><br>
        <input type="submit" value="Enviar">
    </form>
@endsection
