@extends('layouts.headerAdmin')

@section('title', 'Administrador Video')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="paginas">
        <p>Página </p>
        <p class="texto">| Admin Video</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="boton-cerrar-sesion" type="submit">Cerrar Sesión</button>
        </form>
    </div>
    <hr class="linea-horizontal">
    <div class="contenedor-principal">
        <div class="contenedor">
            <div>
                <a href="{{ route('agregarVideo.index', ['nombreUsuario' => $nombreUsuario]) }}">
                    <iconify-icon icon="fluent:notebook-add-24-filled" width="30" height="30">
                    </iconify-icon>
                </a>
            </div>

            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>NOMBRE DEL VIDEO</th>
                            <th>URL</th>
                            <th>DURACION</th>
                            <th>NOMBRE DEL CURSO</th>
                            <th>EDITAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $video)
                            <tr>
                                <td>{{ $video->nombre }}</td>
                                <td>{{ $video->urlVideo }}</td>
                                <td>{{ $video->duracionMin }} MIN</td>
                                <td>{{ $video->nombreCurso }}</td>
                                <td>
                                    <form action="{{ route('actualizarVideo.index', $video->id) }}" method="GET">
                                        @csrf
                                        <input type="hidden" name="idMaterialLectura"
                                            value="{{ $video->idVideo }}">
                                        <input type="hidden" name="recursos_idCursos"
                                            value="{{ $video->recursos_idCursos }}">
                                        <div class="botonEditar">
                                            <button type="submit">
                                                <span class="fas fa-user-edit"></span>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('adminVideo.destroy', $video->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="idVideo"
                                            value="{{ $video->idVideo }}">
                                        <input type="hidden" name="recursos_idCursos"
                                            value="{{ $video->recursos_idCursos }}">
                                        <button class="botonEliminar" type="submit">
                                            <span class="fas fa-trash"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-body">
                {{$datos->links()}}
            </div>
        </div>
    @endsection
