    @extends('layouts.headerAdmin')

    @section('title', 'Administrador Cursos')

    @section('usuario')
        {{ $nombreUsuario }}
    @endsection

    @section('content')
        <div class="paginas">
            <p>Página </p>
            <p class="texto">| Admin Cursos</p>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="boton-cerrar-sesion" type="submit">Cerrar Sesión</button>
            </form>
        </div>
        <hr class="linea-horizontal">
        <div class="contenedor-principal">
                    <a href="{{ route('agregarCurso.index', ['nombreUsuario' => $nombreUsuario]) }}">
                        <iconify-icon icon="fluent:notebook-add-24-filled" width="30" height="30">
                        </iconify-icon>
                    </a>
                </div>

                <div class="table table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>NOMBRE DEL CURSO</th>
                                <th>DESCRIPCION DEL CURSO</th>
                                <th>CREADOR DEL CURSO</th>
                                <th>NIVEL CURSO</th>
                                <th>EDITAR</th>
                                <th>ELIMINAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $cursos)
                                <tr>
                                    <td>{{ $cursos->nombreCurso }}</td>
                                    <td>{{ $cursos->descripCurso }}</td>
                                    <td>{{ $cursos->creador }}</td>
                                    <td>{{ $cursos->nivelCurso }}</td>
                                    <td>
                                        <form action="{{ route('actualizarCurso.index', $cursos->id) }}">
                                            <div class="botonEditar">
                                                <button>
                                                    <span class="fas fa-user-edit"></span>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('adminCurso.destroy', $cursos->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
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
