@extends('layouts.plantilla')

@section('title', 'Create Compentencias')

@section('content')
<?php 
    $c = 0;
?>
    <h1>En esta pagina podrás registar al personal de la institución</h1>
    <form action="{{ route('Staffarea.asigne') }}" method="post"> 
        @csrf

        @foreach ($staff as $item)                    
           <p>Docente: <strong> {{ $item->nombres; }} {{ $item->apellidos; }} </strong> </p>
           <p>Cédula: <strong> {{ $item->cedula; }} </strong> 
            <input type="text" name="cedula" value="{{ $item->cedula; }}" hidden></p>
           <p>Cargo: <strong> {{ $item->cargo; }}  </strong> </p>
        @endforeach

        
            <h3>Seleccione al Docente para Asignar un área de formación</h3>
            <label for="">Área de Formación: <br> 
                @foreach ($area as $item)                    
                    <label for=""><input type="checkbox" name="array[]" id="" value="{{ $item->id; }}"> {{ $item->nombre;}} - {{ $item->grado;}}{{ $item->seccion;}}</label>
                    <?php 
                        $c++;
                        if($c%3 ==0)
                            echo "<br>";
                    ?>
                @endforeach
            </label><br><br> 
            <input type="submit" value="Enviar">
        

    </form>
@endsection
