@extends('layouts.headerAdmin')

@section('title', 'Actualizar Usuario')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="contenedor-principal">

        <div class="contenedor">

            <div class="paginas">
                <p>Página </p>
                <p class="texto">| Editar Usuario</p>
            </div>
            <hr class="linea-horizontal">

            <section>
                <form action="{{ route('actualizarUsuario.update', $persona->id) }}" method="POST">
                    
                    @csrf
                    @method('PUT')

                    <div class="grupoInput">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required value="{{$persona->nombre}}">
                        @error('nombre')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" required value="{{$persona->apellido}}">
                        @error('apellido')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="usuario">Usuario</label>
                        <input type="text" id="usuario" name="usuario" required value="{{$persona->usuario}}">
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
                        <input type="text" id="telefono" name="telefono" required value="{{$persona->telefono}}">
                        @error('telefono')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="correo">Correo</label>
                        <input type="email" id="correo" name="correo" required value="{{$persona->correo}}">
                        @error('correo')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="clave">Clave</label>
                        <input type="password" id="clave" name="clave" placeholder="Ingrese su nueva contraseña">
                        @error('clave')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <button type="submit">Actualizar</button>
                    </div>
                </form>

            </section>

        </div>
    </div>
@endsection
