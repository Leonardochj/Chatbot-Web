@extends('layouts.headerAdmin')

@section('title', 'Administrador Usuarios')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="contenedor-principal">
        <div class="contenedor">
            <div class="paginas">
                <p style="color: #6454C6">CRUD Usuarios</p>
            </div>
            <div><a href="{{ route('agregarUsuario.index', ['nombreUsuario' => $nombreUsuario]) }}"><iconify-icon
                        icon="mingcute:user-add-2-fill" width="30" height="30"></iconify-icon></a></div>

            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>USUARIO</th>
                            <th>ROL</th>
                            <th>TELEFONO</th>
                            <th>CORREO</th>
                            <th>FECHA CUENTA</th>
                            <th>EDITAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $usuarios)
                            <tr>
                                <td>{{ $usuarios->nombre }}</td>
                                <td>{{ $usuarios->apellido }}</td>
                                <td>{{ $usuarios->usuario }}</td>
                                <td>{{ $usuarios->rol }}</td>
                                <td>{{ $usuarios->telefono }}</td>
                                <td>{{ $usuarios->correo }}</td>
                                <td>{{ $usuarios->fechaCuenta }}</td>
                                <td>
                                    <form action="{{route('actualizarUsuario.index', $usuarios->id)}}">
                                        <div class="botonEditar">
                                            <button>
                                                <span class="fas fa-user-edit"></span>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('adminUsuario.destroy', $usuarios->id) }}" method="POST">
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
