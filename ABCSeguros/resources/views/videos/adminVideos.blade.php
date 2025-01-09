@extends('layouts.headerCurso')

@section('title', 'Videos')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="rectangulo">
        <h2>{{$nombreVideo}}</h2>
    </div>
    <div class="contenido-general">
        <div class="contenido-container">
            <div class="video">
            <iframe width="950" height="315" src="https://www.youtube.com/embed/ugxCocs75zE?si=PS_1GVoJpCSI4Knz" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
            </iframe>
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
                                <a href="#seccion1" class="acordeon-titulo" onclick="toggleAcordeon(this)">Sección 1<i
                                        class="fas fa-chevron-down flecha" onclick="toggleFlecha(this)"></i></a>
                                <div class="acordeon-contenido">
                                    <li><a href="">Clase 1</a></li>
                                    <li><a href="">Clase 2</a></li>
                                    <li><a href="">Clase 3</a></li>
                                    @foreach ($cursosActuales as $curso)
                                        <li><a href="{{ route('adminCuestionario1', ['id' => $curso->id]) }}">Cuestionario 1</a></li>
                                    @endforeach
                                    <li><a href="">Clase 4</a></li>
                                    <li><a href="">Clase 5</a></li>
                                    <li><a href="">Cuestionario 2</a></li>
                                    <li><a href="">Clase 6</a></li>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#seccion2" class="acordeon-titulo" onclick="toggleAcordeon(this)">Sección 2<i
                                        class="fas fa-chevron-down flecha" onclick="toggleFlecha(this)"></i></a>
                                <div class="acordeon-contenido">
                                    <li><a href="">Clase 7</a></li>
                                    <li><a href="">Clase 8</a></li>
                                    <li><a href="">Clase 9</a></li>
                                    <li><a href="">Clase 10</a></li>
                                    <li><a href="">Clase 11</a></li>
                                    <li><a href="">Cuestionario 3</a></li>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#seccion3" class="acordeon-titulo" onclick="toggleAcordeon(this)">Sección 3<i
                                        class="fas fa-chevron-down flecha" onclick="toggleFlecha(this)"></i></a>
                                <div class="acordeon-contenido">
                                    <li><a href="">Clase 12</a></li>
                                    <li><a href="">Clase 13</a></li>
                                    <li><a href="">Cuestionario 4</a></li>
                                    <li><a href="">Clase 14</a></li>
                                    <li><a href="">Clase 15</a></li>
                                    <li><a href="">Cuestionario 5</a></li>
                                    <li><a href="">Clase 16</a></li>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function toggleFlecha(element) {
            element.classList.toggle('rotado');
        }

        function toggleAcordeon(element) {
            // Obtener el siguiente elemento hermano (contenedor de contenido)
            var contenido = element.nextElementSibling;

            // Alternar la visibilidad del contenido
            contenido.style.display = (contenido.style.display === 'none' || contenido.style.display === '') ? 'table-row' : 'none';

            // Cambiar la rotación de la flecha
            toggleFlecha(element);
        }
    </script>
@endsection