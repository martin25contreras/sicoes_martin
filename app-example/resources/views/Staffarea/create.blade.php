@extends('layouts.plantilla')

@section('title', 'Create Asignacion')

@section('content')
    <h1>En esta pagina podrás registar al personal de la institución</h1>
    <form action="{{ route('Staffarea.store' ) }}" method="post"> 
        @csrf

        <center>
            <h3>Seleccione al Docente para Asignar un área de formación</h3>
            <label for="">Personal: <br> 
                <select name="personal" >
                    <option value="">Seleccione...</option>
                    @foreach ($staff as $item)                    
                        <option value="{{ $item->cedula; }}"> {{ $item->nombres;}} {{ $item->apellidos;}}</option>
                    @endforeach
                </select>
            </label><br><br> 
            <input type="submit" value="Enviar">
        </center> 

    </form>
@endsection
