@extends('layouts.headerAdmin')

@section('title', 'Actualizar Material Lectura')

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
                <form action="{{ route('actualizarLectura.update', $material->id) }}" method="POST">
                    @csrf
                    @method('put')
            
                    <div class="grupoInput2">
                        <label for="permisos">Permisos</label>
                        <input type="text" id="permisos" name="permisos" required value="{{ $material->permisos }}">
                        @error('permisos')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
            
                    <div class="grupoInput2 full-width">
                        <button type="submit">Actualizar</button>
                    </div>
                </form>
            </section>
            
        </div>
    </div>
@endsection
