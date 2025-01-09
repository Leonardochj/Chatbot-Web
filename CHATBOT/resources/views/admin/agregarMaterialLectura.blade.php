@extends('layouts.headerAdmin')

@section('title', 'Agregar Material Lectura')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="contenedor-principal2">

        <div class="contenedor2">

            <div class="paginas">
                <p style="color: #6454C6">CRUD Roles</p>
            </div>

            <section>
                <form action="{{ route('agregarLectura.store') }}" method="POST">
                    @csrf
                    <div class="grupoInput2">
                        <label for="permisos">Permisos</label>
                        <input type="text" id="permisos" name="permisos" placeholder="Ingrese los permisos para el usuario">
                        @error('permisos')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput2">
                        <label for="id_usu">Usuario</label>
                        <select name="id_usu" id="id_usu">
                            @foreach($usuarios as $usuario)
                                <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                            @endforeach
                        </select>
                        @error('id_usu')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput2 full-width">
                        <button type="submit">Agregar</button>
                    </div>
                </form>
            </section>            
            
        </div>
    </div>
@endsection
