@extends('layouts.headerAdmin')

@section('title', 'Actualizar Usuario')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="contenedor-principal3">

        <div class="contenedor3">

            <div class="paginas3">
                <p style="color: #6454C6">CRUD Usuarios</p>
            </div>

            <section>
                <form action="{{ route('actualizarUsuario.update', $persona->id) }}" method="POST">
                    
                    @csrf
                    @method('PUT')

                    <div class="grupoInput3">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required value="{{$persona->nombre}}">
                        @error('nombre')
                            <span class="error3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput3">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" required value="{{$persona->apellido}}">
                        @error('apellido')
                            <span class="error3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput3">
                        <label for="usuario">Usuario</label>
                        <input type="text" id="usuario" name="usuario" required value="{{$persona->usuario}}">
                        @error('usuario')
                            <span class="error3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput3">
                        <label for="rol">Rol</label>
                        <select name="rol" id="rol">
                            <option>Admin</option>
                            <option>Estudiante</option>
                        </select>
                    </div>
                    <div class="grupoInput3">
                        <label for="telefono">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" required value="{{$persona->telefono}}">
                        @error('telefono')
                            <span class="error3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput3">
                        <label for="correo">Correo</label>
                        <input type="email" id="correo" name="correo" required value="{{$persona->correo}}">
                        @error('correo')
                            <span class="error3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput3">
                        <label for="clave">Clave</label>
                        <input type="password" id="clave" name="clave" placeholder="Ingrese su nueva contraseña">
                        @error('clave')
                            <span class="error3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput3 full-width">
                        <button type="submit">Actualizar</button>
                    </div>
                </form>

            </section>

        </div>
    </div>
@endsection
