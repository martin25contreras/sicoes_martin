@extends('layouts.plantilla')

@section('title', 'Create Compentencias')

@section('content')
    <h1>En esta pagina podrás registar al personal de la institución</h1>
    <form action="{{ route('Staffarea.store') }}" method="post"> 
        @csrf

        {{ $personal->nombres;}}

        <center>
            <h3>Seleccione al Docente para Asignar un área de formación</h3>
            <label for="">Área de Formación: <br> 
                <select name="personal" >
                    <option value="">Seleccione...</option>
                    @foreach ($area as $item)                    
                        <option value="{{ $item->id; }}"> {{ $item->nombre;}}</option>
                    @endforeach
                </select>
            </label><br><br> 
            <input type="submit" value="Enviar">
        </center> 

    </form>
@endsection
