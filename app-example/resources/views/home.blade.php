@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h1>Bienvenidos a la pagina principal</h1>

    <a href="{{ route('competicies.index')}}">Competicias</a><br>
    <a href="{{ route('indicators.index')}}">Indicadores</a><br>
    <a href="{{ route('indicatorsLapse.index')}}">Asignación de Indicadores</a><br>
    <a href="{{ route('staff.index')}}">Personal</a><br>

@endsection
