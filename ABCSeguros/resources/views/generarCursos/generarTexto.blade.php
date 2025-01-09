@extends('layouts.headerCurso')

@section('title', 'Cursos')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="rectangulo">
        <h2>{{ $nombreCurso }}</h2>
    </div>
    <div class="contenido-general" id="contenido-libro">
        <div class="contenido-container">
            <div class="tabla-contenido">
                <div class="contenido-container-scrollable">
                    <table>
                        <thead>
                            <tr>
                                <th>CATEGORÍAS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h2>Guía Básica</h2>
                                    <hr class="linea">
                                    <ul>
                                        <div class="for">
                                            @foreach ($materialesDeLectura as $materialDeLectura)
                                                <li class="listaLibros"><a href="https://core.ac.uk/download/pdf/61411823.pdf">{{ $materialDeLectura->contenido }}
                                                        <i class="fa-solid fa-book"></i></a></li>
                                            @endforeach
                                        </div>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
