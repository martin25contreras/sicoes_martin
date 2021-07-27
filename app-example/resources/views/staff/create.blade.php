@extends('layouts.plantilla')

@section('title', 'Create Compentencias')

@section('content')
    <h1>En esta pagina podrás registar al personal de la institución</h1>
    <form action="{{ route('staff.store') }}" method="post"> 
        
        @csrf

        <label for="">Nombres: <br> 
            <input type="text" name="nombres">
        </label><br><br>  
        <label for="">Apellidos: <br> 
            <input type="text" name="apellidos">
        </label><br><br>  
        <label for="">Cédula: <br> 
            <input type="text" name="cedula">
        </label><br><br>  
        <label for="">Dirección: <br> 
            <textarea name="direccion" id="" cols="40" rows="5"></textarea>
        </label><br><br>  
        <label for="">Correo Personal: <br> 
            <input type="email" name="correo">
        </label><br><br>  
        <label for="">Teléfono Móvil: <br> 
            <input type="text" name="telefono" placeholder="codigo - numero">
        </label><br><br>  
        <label for="">Teléfono Casa: <br> 
            <input type="text" name="telefono_casa" placeholder="codigo - numero">
        </label><br><br>  
        <label for="">Fecha de Nacimiento: <br> 
            <input type="date" name="fecha">
        </label><br><br>  
        <label for="">Cargo: <br> 
            <select name="cargo">
                <option value="">Seleccione...</option>
                <option value="Maestra Integral">Maestra Integral</option>
                <option value="Maestra Especialista">Maestra Especialista</option>
                <option value="Coordinador">Coordinador</option>
            </select>
        </label><br><br> 
        <br><br>
        <input type="submit" value="Enviar">
    </form>
@endsection
