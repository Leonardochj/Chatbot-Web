@extends('layouts.headerCurso')

@section('title', 'Cuestionario')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="rectangulo">
        <h2>{{$nombreCurso}}</h2>
    </div>
    <div class="contenido-general">
        <div class="contenido-container">
            <div class="video2">
                <div class="comentarios2">
                    <h2>
                        <div><i class="fas fa-star"></i></div>
                        ¡Buen trabajo! Ya estás listo para pasar a la siguiente clase. Has completado el cuestionario
                    </h2>
                    @foreach ($cursosActuales as $curso)
                    <form class="formulario-preguntas2">
                        <a href="{{ route('generarCursos.index', ['id' => $curso->id]) }}">Continuar</a>
                        <a href="{{ route('adminCuestionario1', ['id' => $curso->id]) }}">Reintentar Cuestionario</a>
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