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
                                    <hr>
                                    <ul>
                                        <li><a href="">Libro 1 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
                                        <li><a href="">Libro 2 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
                                        <li><a href="">Libro 3 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
                                        <li><a href="">Libro 4 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
                                        <li><a href="">Libro 5 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
                                        <li><a href="">Libro 6 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
                                        <li><a href="">Libro 7 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
                                        <li><a href="">Libro 8 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
                                        <li><a href="">Libro 9 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
                                        <li><a href="">Libro 10 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2>Guía Avanzada</h2>
                                    <hr>
                                    <ul>
                                        <li><a href="">Libro 1 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
                                        <li><a href="">Libro 2 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
                                        <li><a href="">Libro 3 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
                                        <li><a href="">Libro 4 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
                                        <li><a href="">Libro 5 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
                                        <li><a href="">Libro 6 &nbsp&nbsp<i class="fa-solid fa-book"></i></a></li>
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