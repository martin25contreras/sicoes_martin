@extends('layouts.plantilla')

@section('title', 'indicators Edit')

@section('content')
    <h1>En esta pagina podras editar su Indicador</h1>
    <form action="{{ route('indicators.update', $indicators) }}" method="post"> 
        
        @csrf

        @method('put')

        <label for="">Nombre del Indicador: <br> 
            <input type="text" name="nombre" value="{{ $indicators->nombre; }}">
        </label><br><br>  
        <label for="">Materia: <br> 
            <select name="materia" >
                <option value="{{ $indicators->materia; }}">{{ $indicators->materia; }}</option>
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
        <input type="submit" value="Actualizar">
    </form>
@endsection
