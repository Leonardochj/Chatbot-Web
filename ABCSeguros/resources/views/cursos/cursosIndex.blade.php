@extends('layouts.headerCurso')

@section('title', 'Cursos')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="cursosActuales">
        <br>
        <h1>Cursos Actuales</h1>
        <br>
    </div>

    <!-- Iterar sobre los cursos actuales -->
    <section class="cursosCards">
        @foreach ($cursosActuales as $index => $curso)
            <article class="itemCard">
                <a href="{{ route('generarCursos.index', ['id' => $curso->id]) }} ">
                    <img src="{{ asset($fotos[$index]) }}" alt="Foto del curso">
                    <h3>{{ $curso->nombreCurso }}</h3>
                </a>
                <br>
                <h3>{{ $curso->creador }}</h3>
                <div class="tarjeta">
                    <div class="puntuacion">
                        <h3>4.6</h3>
                        <i class="fa-solid fa-star yellow-star"></i>
                        <i class="fa-solid fa-star yellow-star"></i>
                        <i class="fa-solid fa-star yellow-star"></i>
                        <i class="fa-solid fa-star yellow-star"></i>
                        <i class="fa-regular fa-star yellow-star"></i>
                    </div>
                    <div class="libro">
                        <ul class="menu-principal2">
                            <li class="expanded">
                                <a href="#"><iconify-icon icon="fluent:book-question-mark-20-filled" width="30"
                                        height="30"></iconify-icon></a>
                                <ul class="menu31">
                                    <li class="leaf nombre-usuario">
                                        {{ $curso->descripCurso }}
                                    </li>
                                    <hr>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('generarTexto.index', ['id' => $curso->id]) }}"><iconify-icon
                                        icon="bxs:book" width="30" height="30"></iconify-icon></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
        @endforeach
    </section>

    <!-- Repite el mismo patrón para los cursos recomendados -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="verMas">
        <a href="">Ver más</a>
    </div>

    <br>
    <hr>
    <br>
    <br>

    <section class="cursosCards">
        @foreach ($cursosRecomendados as $index => $curso)
            <article class="itemCard">
                <a href="{{ route('generarCursos.index', ['id' => $curso->id]) }}">
                    <img src="{{ asset($fotos2[$index]) }}">
                    <h3>{{ $curso->nombreCurso }}</h3>
                </a>
                <br>
                <h3>{{ $curso->creador }}</h3>
                <div class="tarjeta">
                    <div class="puntuacion">
                        <h3>3.5</h3>
                        <i class="fa-solid fa-star yellow-star"></i>
                        <i class="fa-solid fa-star yellow-star"></i>
                        <i class="fa-solid fa-star yellow-star"></i>
                        <i class="fa-regular fa-star yellow-star"></i>
                        <i class="fa-regular fa-star yellow-star"></i>
                    </div>
                    <div class="libro">
                        <ul class="menu-principal2">
                            <li class="expanded">
                                <a href="#"><iconify-icon icon="fluent:book-question-mark-20-filled" width="30"
                                        height="30"></iconify-icon></a>
                                <ul class="menu31">
                                    <li class="leaf nombre-usuario">
                                        {{ $curso->descripCurso }}
                                    </li>
                                    <hr>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('generarTexto.index', ['id' => $curso->id]) }}"><iconify-icon
                                        icon="bxs:book" width="30" height="30"></iconify-icon></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
        @endforeach
    </section>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="verMas">
        <a href="">Ver más</a>
    </div>

    <br>
    <hr>
    <br>
    <br>

@endsection
