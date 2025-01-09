@extends('layouts.headerAdmin')

@section('title', 'Administrador Material Lectura')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="paginas">
        <p>Página </p>
        <p class="texto">| Admin Lecturas</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="boton-cerrar-sesion" type="submit">Cerrar Sesión</button>
        </form>
    </div>
    <hr class="linea-horizontal">
    <div class="contenedor-principal">
        <div class="contenedor">
            <div>
                <a href="{{ route('agregarLectura.index', ['nombreUsuario' => $nombreUsuario]) }}">
                    <iconify-icon icon="fluent:notebook-add-24-filled" width="30" height="30">
                    </iconify-icon>
                </a>
            </div>

            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>NOMBRE DEL MATERIAL</th>
                            <th>URL</th>
                            <th>NOMBRE DEL CURSO</th>
                            <th>EDITAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $material)
                            <tr>
                                <td>{{ $material->contenido }}</td>
                                <td>{{ $material->url }}</td>
                                <td>{{ $material->nombreCurso }}</td>
                                <td>
                                    <form action="{{ route('actualizarLectura.index', $material->id) }}" method="GET">
                                        @csrf
                                        <div class="botonEditar">
                                            <button type="submit">
                                                <span class="fas fa-user-edit"></span>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('adminLectura.destroy', $material->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="idMaterialLectura"
                                            value="{{ $material->id }}">
                                        <input type="hidden" name="recursos_idCursos"
                                            value="{{ $material->recursos_idCursos }}">
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
