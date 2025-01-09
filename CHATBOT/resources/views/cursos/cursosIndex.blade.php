@extends('layouts.headerCurso')

@section('title', 'Cursos')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="cursosActuales">
        <br>
        <h1>Cotizaciones ABC Seguros</h1>
        <br>
        <div class="card-container">
            <div class="card">
                <i class="fa-solid fa-heart-pulse"></i>
                <p class="card-title">ASISTENCIA MÉDICA</p>
                <button class="card-button"><i class="fa-solid fa-dollar-sign"></i></button>
            </div>
            <div class="card">
                <i class="fa-solid fa-car"></i>
                <p class="card-title">VEHICULOS PARA VENDEDORES</p>
                <button class="card-button"><i class="fa-solid fa-dollar-sign"></i></button>
            </div>
            <div class="card">
                <i class="fa-solid fa-user-doctor"></i>
                <p class="card-title">ASISTENCIA MÉDICA PARA VENDEDORES</p>
                <button class="card-button"><i class="fa-solid fa-dollar-sign"></i></button>
            </div>
        </div>
    </div>


@endsection
