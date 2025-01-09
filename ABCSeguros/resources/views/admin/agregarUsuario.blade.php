@extends('layouts.headerAdmin')

@section('title', 'Agregar Usuario')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="contenedor-principal">

        <div class="contenedor">

            <div class="paginas">
                <p>Página </p>
                <p class="texto">| Nuevo Usuario</p>
            </div>
            <hr class="linea-horizontal">

            <section>
                <form action="{{ route('agregarUsuario.store') }}" method="POST">
                    @csrf
                    <div class="grupoInput">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre">
                        @error('nombre')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Ingrese el apellido">
                        @error('apellido')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="usuario">Usuario</label>
                        <input type="text" id="usuario" name="usuario" placeholder="Ingrese el nombre de usuario">
                        @error('usuario')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="rol">Rol</label>
                        <select name="rol" id="rol">
                            <option>Admin</option>
                            <option>Estudiante</option>
                        </select>
                    </div>
                    <div class="grupoInput">
                        <label for="telefono">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" placeholder="Ingrese el número de teléfono">
                        @error('telefono')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="correo">Correo</label>
                        <input type="email" id="correo" name="correo" placeholder="Ingrese el correo">
                        @error('correo')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="clave">Clave</label>
                        <input type="text" id="clave" name="clave" placeholder="Ingrese una clave">
                        @error('clave')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <button type="submit">Ingresar</button>
                    </div>
                </form>

            </section>

        </div>
    </div>
@endsection
