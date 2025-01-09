@extends('layouts.headerAdmin')

@section('title', 'Actualizar Curso')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="contenedor-principal">

        <div class="contenedor">

            <div class="paginas">
                <p>Página </p>
                <p class="texto">| Nuevo curso</p>
            </div>
            <hr class="linea-horizontal">

            <section>
                <form action="{{ route('actualizarCurso.update', $curso->id) }}" method="POST">

                    @csrf
                    @method('put')

                    <div class="grupoInput">
                        <label for="nombreCurso">Nombre Curso</label>
                        <input type="text" id="nombreCurso" name="nombreCurso" required value="{{$curso->nombreCurso}}">
                        @error('nombreCurso')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="descripCurso">Descripción Curso</label>
                        <input type="text" id="descripCurso" name="descripCurso" required value="{{$curso->descripCurso}}">
                        @error('descripCurso')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="creador">Creador</label>
                        <input type="text" id="creador" name="creador"
                            placeholder="Ingrese el nombre del creador del curso" required value="{{$curso->creador}}">
                        @error('creador')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="nivelCurso">Nivel Curso</label>
                        <select name="nivelCurso" id="nivelCurso">
                            <option>Básico</option>
                            <option>Intermedio</option>
                            <option>Experimentado</option>
                            <option>Avanzado</option>
                        </select>
                        @error('nivelCurso')
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
