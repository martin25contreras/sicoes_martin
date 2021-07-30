@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Bienvenidos a la pagina de Asignación de Áreas de Formación</h1>
    <a href="{{ route('Staffarea.create') }}">Asignar Personal</a>
    
    <br><br>
    <table border="1">
        <thead>
            <tr>
                <td>Docente</td>
                <td>Cargo</td>
                <td>Área de Formación</td>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($staffarea as $item)
            <tr> 
                <td>{{ $item->nombres;}} {{ $item->apellidos;}}</td>
                <td>{{ $item->cargo;}}</td>
                <td>{{ $item->nombre;}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{-- {{ $competicies ->links(); }}  --}}
@endsection
