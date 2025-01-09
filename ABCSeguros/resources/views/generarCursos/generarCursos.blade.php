@extends('layouts.headerCurso')

@section('title', 'Cursos')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="rectangulo">
        <h2>{{ $nombreCurso }}</h2>
    </div>

    <div class="contenido-general">
        <div class="contenido-container">
            <div class="video">
                <iframe id="videoIframe" width="100%" height="360"
                    src="https://www.youtube.com/embed/JLGAyU3dy2E?si=AIzXc_i3n_O3o-mI" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <div class="comentarios">
                    <h3>Preguntas y Respuestas</h3>
                    <form class="formulario-preguntas">
                        <input type="text" id="nombre-pregunta" name="nombre-pregunta"
                            placeholder="¿Tienes alguna pregunta?" required>
                    </form>
                    <div class="respuestas">
                        <div class="pregunta-respuesta">
                            <strong>Pregunta:</strong> En el mínuto 1:53 hablo algo sobre la bolsa, ¿podría explicarme
                            un poco mejor sobre eso?
                            <div><strong>Respuesta:</strong> Claro, con gusto, la bolsa se tratá de...</div>
                        </div>
                    </div>
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
