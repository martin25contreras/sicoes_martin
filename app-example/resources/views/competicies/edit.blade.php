@extends('layouts.plantilla')

@section('title', 'competicies Edit')

@section('content')
    <h1>En esta pagina podras editar un competicies</h1>
    <form action="{{ route('competicies.update', $competicies) }}" method="post"> 
        
        @csrf

        @method('put')

        <label for="">Nombre: <br> 
            <input type="text" name="competencia" value="{{ $competicies->nombre_competencia; }}">
        </label><br><br>
        <input type="submit" value="Actualizar">
    </form>
@endsection
