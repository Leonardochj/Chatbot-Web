@extends('layouts.headerAdmin')

@section('title', 'Agregar Curso')

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
                <form action="{{ route('agregarCurso.store') }}" method="POST">
                    @csrf
                    <div class="grupoInput">
                        <label for="nombreCurso">Nombre Curso</label>
                        <input type="text" id="nombreCurso" name="nombreCurso" placeholder="Ingrese el nombre del curso">
                        @error('nombreCurso')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="descripCurso">Descripción Curso</label>
                        <textarea id="descripCurso" name="descripCurso" placeholder="Ingrese la descripción del curso"></textarea>
                        @error('descripCurso')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="creador">Creador</label>
                        <select name="creador" id="creador">
                            <option>Fernando Cabrera</option>
                            <option>María Herrera</option>
                            <option>Ramiro Cueva</option>
                            <option>Carlos Romero</option>
                            <option>Daniel Torres</option>
                        </select>
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
                        <button type="submit">Ingresar</button>
                    </div>
                </form>

            </section>

        </div>
    @endsection
