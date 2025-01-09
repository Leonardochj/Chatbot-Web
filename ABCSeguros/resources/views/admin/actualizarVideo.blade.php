@extends('layouts.headerAdmin')

@section('title', 'Actualizar Video')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="contenedor-principal">

        <div class="contenedor">

            <div class="paginas">
                <p>Página </p>
                <p class="texto">| Editar Video</p>
            </div>
            <hr class="linea-horizontal">

            <section>
                <form action="{{ route('actualizarVideo.update', $video->id) }}" method="POST">

                    @csrf
                    @method('put')

                    <div class="grupoInput">
                        <label for="nombre">Nombre Del Video</label>
                        <input type="text" id="nombre" name="nombre" required value="{{$video->nombre}}">
                        @error('nombreCurso')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="url">URL Del Video</label>
                        <input type="text" id="url" name="url" required value="{{$video->urlVideo}}">
                        @error('descripCurso')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="duracion">Duracion</label>
                        <input type="text" id="duracion" name="duracion" required value="{{$video->duracionMin}}">
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
