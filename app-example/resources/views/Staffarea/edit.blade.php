@extends('layouts.plantilla')

@section('title', 'staff Edit')

@section('content')
    <h1>En esta pagina podras editar su Indicador</h1>
    <form action="{{ route('staff.update', $staff) }}" method="post"> 
        
        @csrf

        @method('put')

        <label for="">Nombres: <br> 
            <input type="text" name="nombres" value="{{ $staff->nombres; }}">
        </label><br><br>  
        <label for="">Apellidos: <br> 
            <input type="text" name="apellidos" value="{{ $staff->apellidos; }}">
        </label><br><br>  
        <label for="">Cédula: <br> 
            <input type="text" name="cedula" value="{{ $staff->cedula; }}" readonly>
        </label><br><br>  
        <label for="">Dirección: <br> 
            <textarea name="direccion" id="" cols="40" rows="5">{{ $staff->direccion; }}</textarea>
        </label><br><br>  
        <label for="">Correo Personal: <br> 
            <input type="email" name="correo" value="{{ $staff->correo; }}">
        </label><br><br>  
        <label for="">Teléfono Móvil: <br> 
            <input type="text" name="telefono" placeholder="codigo - numero" value="{{ $staff->telefono; }}">
        </label><br><br>  
        <label for="">Teléfono Casa: <br> 
            <input type="text" name="telefono_casa" placeholder="codigo - numero" value="{{ $staff->telefono_casa; }}">
        </label><br><br>  
        <label for="">Fecha de Nacimiento: <br> 
            <input type="text" name="fecha" value="{{ $staff->ano_nacimiento; }}-{{ $staff->mes_nacimiento; }}-{{ $staff->dia_nacimiento; }}">
        </label><br><br>  
        <label for="">Cargo: <br> 
            <select name="cargo">
                <option value="{{ $staff->cargo; }}"> {{ $staff->cargo; }}</option>
                <option value="Maestra Integral">Maestra Integral</option>
                <option value="Maestra Especialista">Maestra Especialista</option>
                <option value="Coordinador">Coordinador</option>
            </select>
        </label><br><br>      
        <input type="submit" value="Actualizar">
    </form>
@endsection
