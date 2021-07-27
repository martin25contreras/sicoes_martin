@extends('layouts.plantilla')

@section('title', 'Create Area')

@section('content')
    <h1>En esta pagina podrás registar las diversas áreas de la institución</h1>
    <form action="{{ route('area.store') }}" method="post"> 
        
        @csrf

        <label for="">Nombre del Área: <br> 
            <input type="text" name="nombre_area">
        </label><br><br>  

        <label for="">Carga Horaria: <br> 
            <input type="number" name="carga_horaria" min="1">
        </label><br><br>  
        
        <label for="">Grado: <br> 
            <select name="grado">
                <option value="">Seleccione...</option>
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
                <option value="">Seleccione...</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>
        </label><br><br> 
        <br><br>
        <input type="submit" value="Enviar">
    </form>
@endsection
