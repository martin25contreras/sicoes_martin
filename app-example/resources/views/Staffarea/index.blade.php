@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Bienvenidos a la pagina de Asignación de Áreas de Formación</h1>
    <a href="{{ route('Staffarea.create') }}">Asignar Personal</a>
    
    <br><br>
    {{-- <table border="1">
        <thead>
            <tr>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Correo</td>
                <td>Teléfono</td>
                <td>Cargo</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($staff as $item)
            <tr> 
                <td>{{ $item->nombres;}}</td>
                <td>{{ $item->apellidos;}}</td>
                <td>{{ $item->correo;}}</td>
                <td>{{ $item->telefono;}}</td>
                <td>{{ $item->cargo;}}</td>
                <td> 
                    <a href="{{ route('staff.show', $item->id) }}">
                        Editar
                    </a>
                </td>
                  
            </tr>
        @endforeach
        </tbody>
    </table> --}}
    {{-- {{ $competicies ->links(); }}  --}}
@endsection
