@extends('layouts.headerAdmin')

@section('title', 'Administrador')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="paginas">
        <p>Página </p>
        <p class="texto">| Dashboard</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="boton-cerrar-sesion" type="submit">Cerrar Sesión</button>
        </form>
        <br>
    </div>
    <hr class="linea-horizontal">
    @if ($error)
        <div class="alert alert-success" style="color: black">
            <h5>{{ $error }}</h5>
        </div>
    @endif
    <br>
    <div class="contenido-pagina">
        <section class="estadistica1">
            <div>
                <p class="texto">Usuarios totales </p>
                <p class="ganancias">
                    {{ $usuariosCount }}
                </p>
            </div>
            <div><iconify-icon icon="solar:user-bold" width="50" height="50"></iconify-icon></div>
        </section>
        <section class="estadistica2">
            <div>
                <p>Cursos totales</p>
                <p class="ganancias">
                    {{ $cursosCount }}
                </p>
            </div>
            <div><iconify-icon icon="wpf:books" width="50" height="50"></iconify-icon></div>
        </section>
    </div>
    <div class="estadistica3">
        <div id="piechart" style="width: 500px; height: 300px;"></div>
    </div>
@endsection
