@extends('layouts.headerAdmin')

@section('title', 'Agregar Material Lectura')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="contenedor-principal">

        <div class="contenedor">

            <div class="paginas">
                <p>Página </p>
                <p class="texto">| Nuevo Material</p>
            </div>
            <hr class="linea-horizontal">

            <br>
            <section>
                <form action="{{ route('agregarLectura.store') }}" method="POST">
                    @csrf
                    <div class="grupoInput">
                        <label for="nombre">Nombre Material</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre del material">
                        @error('nombre')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="url">URL Del Material</label>
                        <input type="text" id="url" name="url" placeholder="Ingrese el url del archivo">
                    </div>
                    <div class="grupoInput">
                        <label for="idCurso">Curso</label>
                        <select name="idCurso" id="idCurso">
                            @foreach ($cursos as $curso)
                            <option value="{{$curso->id}}">{{$curso->nombreCurso}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="grupoInput">
                        <button type="submit">Agregar</button>
                    </div>
                </form>

            </section>

        </div>
    </div>
@endsection
