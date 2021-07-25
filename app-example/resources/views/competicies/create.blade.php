@extends('layouts.plantilla')

@section('title', 'Create Compentencias')

@section('content')
    <h1>En esta pagina podras crear las Compentencias del año</h1>
    <form action="{{ route('competicies.store') }}" method="post"> 
        
        @csrf

        <label for="">Nombre de la Competencia: <br> 
            <input type="text" name="competencia">
        </label><br><br>  
        <label for="">Año Escolar: <br> 
            <input type="text" name="ano_escolar" value="<?php $ldate = date('Y'); echo $ldate."-".$ldate+1; ?>" readonly>
        </label><br><br>  
        <br><br>
        <input type="submit" value="Enviar">
    </form>
@endsection
