@extends('layouts.headerAdmin')

@section('title', 'Actualizar Material Lectura')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="contenedor-principal">

        <div class="contenedor">

            <div class="paginas">
                <p>Página </p>
                <p class="texto">| Editar Material Lectura</p>
            </div>
            <hr class="linea-horizontal">

            <section>
                <form action="{{ route('actualizarLectura.update', $material->id) }}" method="POST">

                    @csrf
                    @method('put')

                    <div class="grupoInput">
                        <label for="nombre">Nombre Del Material</label>
                        <input type="text" id="nombre" name="nombre" required value="{{$material->contenido}}">
                        @error('nombreCurso')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="url">URL Del Material</label>
                        <input type="text" id="url" name="url" required value="{{$material->url}}">
                        @error('descripCurso')
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
