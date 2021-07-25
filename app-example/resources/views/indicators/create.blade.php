@extends('layouts.plantilla')

@section('title', 'Create Indicadores')

@section('content')
    <h1>En esta pagina podras crear las Indicadores del año</h1>
    <form action="{{ route('indicators.store') }}" method="post"> 
        
        @csrf

        <label for="">Nombre del Indicador: <br> 
            <input type="text" name="nombre">
        </label><br><br>  
        <label for="">Materia: <br> 
            <select name="materia" >
                <option value="">Seleccione...</option>
                <option value="Mat">Matemática</option>
                <option value="Len">Lenguaje</option>
                <option value="Ci_Na">Ciencia Naturales</option>
                <option value="Ci_So">Ciencia Sociales</option>
                <option value="In">Inglés</option>
                <option value="Est">Educación Estética</option>
                <option value="Ed_fi">Educación Física</option>
                <option value="Ed_Fe">Educación para la Fé</option>
                <option value="Ludo">Ludoteca</option>
                <option value="Inf">Informática</option>
                <option value="Ref">Refuerzo Pedadagógio</option>
            </select>
        </label><br><br>  
        <label for="">Estatus del Indicador: <br> 
            <input type="text" name="estatus" value="Activo" readonly>
        </label><br><br>  
        <br><br>
        <input type="submit" value="Enviar">
    </form>
@endsection
