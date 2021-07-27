@extends('layouts.plantilla')

@section('title', 'Docente: '. $staff->nombres. ' '.$staff->apellidos)

@section('content')
    <h1>bienvenido al Docente: {{ $staff->nombres. ' '.$staff->apellidos; }}</h1>
    <a href="{{ route('staff.index')}}">Volver</a><br>
    <a href="{{ route('staff.edit', $staff)}}">Editar Personal</a>


    <p>
        <strong>
            Correo: {{$staff->correo}}
        </strong>        
    </p>
    <p>
        <strong>
            Cédula: {{$staff->cedula}}
        </strong>        
    </p>
    <p>     
        <strong>   
            Dirección: {{ $staff->direccion }}
        </strong>
    </p>
    <p>     
        <strong>   
            Teléfono Móvil: {{ $staff->telefono }}
        </strong>
        <strong>   
            Teléfono Casa: {{ $staff->telefono_casa }}
        </strong>
    </p>
    <p>     
        <strong>   
            Fecha de Nacimiento: {{ $staff->dia_nacimiento }} - {{ $staff->mes_nacimiento }} - {{ $staff->ano_nacimiento }}
        </strong>
    </p>
    <p>     
        <strong>   
            Cargo: {{ $staff->cargo }}
        </strong>
    </p>
@endsection
