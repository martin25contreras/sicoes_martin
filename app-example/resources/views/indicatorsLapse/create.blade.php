@extends('layouts.plantilla')

@section('title', 'Create Indicadores')

@section('content')
    <h1>En esta pagina podrás Seleccionar la compentecia por lapso</h1>
    <form action="{{ route('indicatorsLapse.store') }}" method="post"> 
        
        @csrf
      
        <label for="">Competencias: <br> 
            <select name="id_competencia" >
                <option value="">Seleccione...</option>
                @foreach ($competicies as $item)                    
                    <option value="{{ $item->id; }}"> {{ $item->nombre_competencia;}}</option>
                @endforeach
            </select>
        </label><br><br>  
        <label for="">Indicador: <br> 
            <select name="id_indicador" >
                <option value="">Seleccione...</option>
                @foreach ($indicators as $item)                    
                    <option value="{{ $item->id; }}"> {{ $item->nombre;}}</option>
                @endforeach
            </select>
        </label><br><br>  
        <label for="">Lapso: <br> 
            <select name="lapso_escolar" >
                <option value="">Seleccione...</option>
                <option value="I">Primer Momento</option>
                <option value="II">Segundo Momento</option>
                <option value="II">Tercer Momento</option>
            </select>
        </label><br><br>  
        <label for="">Estatus del Indicador: <br> 
            <input type="text" name="estatus" value="Activo" readonly>
        </label><br><br>  
        <br><br>
        <input type="submit" value="Enviar">
    </form>
@endsection
