@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h1>Bienvenidos a la pagina principal</h1>

    <a href="{{ route('competicies.index')}}">Competicias</a><br>
    <a href="{{ route('indicators.index')}}">Indicadores</a><br>
    <a href="{{ route('indicatorsLapse.index')}}">Asignación de Indicadores</a><br>
    <a href="{{ route('staff.index')}}">Personal</a><br>
    <a href="{{ route('area.index')}}">Área</a><br>
    <a href="{{ route('Staffarea.index')}}">Asignar Áreas de Formación</a><br>
    <a href="{{ route('inscription.index') }}"> Proceso de Selección </a>

@endsection
