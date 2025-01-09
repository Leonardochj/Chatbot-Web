@extends('layouts.headerAdmin')

@section('title', 'Administrador')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    @if ($error)
        <div class="alert alert-success" style="color: black">
            <h5>{{ $error }}</h5>
        </div>
    @endif
    <br>
    <div class="card-container">
        <div class="card">
            <i class="fa-regular fa-user"></i>
            <p class="card-title">USUARIOS TOTALES</p>
            <p class="card-value">{{ $usuariosCount }}</p>
            <button class="card-button">CRUD</button>
        </div>
        <div class="card">
            <i class="fa-solid fa-group-arrows-rotate"></i>
            <p class="card-title">ROLES TOTALES</p>
            <p class="card-value">{{ $rolesCount }}</p>
            <button class="card-button">CRUD</button>
        </div>
        <div class="card">
            <i class="fa-solid fa-gear"></i>
            <p class="card-title">CONFIGURACIÓN DE MARCA</p>
            <button class="card-button">Configurar</button>
        </div>
        <div class="card">
            <i class="fa-solid fa-tag"></i>
            <p class="card-title">COTIZACIONES</p>
            <button class="card-button">Cotizar</button>
        </div>
        <div class="card">
            <i class="fa-solid fa-square-up-right"></i>
            <p class="card-title">CRM</p>
            <button class="card-button">Gestionar</button>
        </div>
    </div>
@endsection
