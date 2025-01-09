@extends('layouts.headerCurso')

@section('title', 'Cuestionario')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="rectangulo">
        <h2>{{ $nombreCurso }}</h2>
    </div>
    <div class="contenido-general">
        <div class="contenido-container">
            <div class="video2">
                <div class="comentarios2">
                    @foreach ($cuestionarioLectura as $nomCuestionario)
                        <h1>{{ $nomCuestionario->nombreCuestionario }}</h1>
                    @endforeach
                    @php
                        $opcionesPorPregunta = 3; // Define la cantidad de opciones a mostrar por pregunta.
                        $contador = 0;
                    @endphp

                    @foreach ($preguntasLectura as $pregunta)
                        <h3>{{ $pregunta->enunciadoPregunta }}</h3>
                        <form class="formulario-preguntas2">
                            @for ($j = $contador; $j < $contador + $opcionesPorPregunta; $j++)
                                @if (isset($opcionesLectura[$j]))
                                    <label>
                                        <input type="radio" name="opcion" value="{{ $opcionesLectura[$j]->valorOpcion }}">
                                        {{ $opcionesLectura[$j]->textoOpcion }}
                                    </label>
                                @endif
                            @endfor

                            @php
                                $contador += $opcionesPorPregunta;
                            @endphp
                        </form>
                    @endforeach


                    @foreach ($cursosActuales as $curso)
                        <form class="formulario-preguntas2">
                            <a href="{{ route('adminCuestionario2', ['id' => $curso->id]) }}">Comprobar respuestas</a>
                            <a href="{{ route('generarCursos.index', ['id' => $curso->id]) }}">Saltar Cuestionario</a>
                        </form>
                    @endforeach
                </div>
            </div>
            <div class="tabla-contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Contenido del Curso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="for">
                                    @foreach ($videosDeLectura as $videoLectura)
                                        <li><a href="#"
                                                onclick="cambiarVideo('{{ $videoLectura->urlVideo }}')">{{ $videoLectura->nombre }}</a>
                                        </li>
                                        <hr class="linea-separadora">
                                    @endforeach
                                    @if ($cuestionario)
                                        <li><a href="{{ route('adminCuestionario1', $cuestionario) }}">Cuestionario</a></li>
                                    @endIf
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
<script>
    function toggleFlecha(element) {
        element.classList.toggle('rotado');
    }

    function toggleAcordeon(element) {
        // Obtener el siguiente elemento hermano (contenedor de contenido)
        var contenido = element.nextElementSibling;

        // Alternar la visibilidad del contenido
        contenido.style.display = (contenido.style.display === 'none' || contenido.style.display === '') ? 'table-row' :
            'none';

        // Cambiar la rotación de la flecha
        toggleFlecha(element);
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Verifica si la página se ha cargado por primera vez
        if (localStorage.getItem('primeraVez') === null) {
            // Cambia la URL del video por defecto
            cambiarVideo('https://www.youtube.com/embed/JLGAyU3dy2E?si=AIzXc_i3n_O3o-mI');

            // Marca la página como cargada por primera vez
            localStorage.setItem('primeraVez', 'true');
        }
    });

    function cambiarVideo(url) {
        var iframe = document.getElementById('videoIframe');
        iframe.src = url;
    }
</script>
