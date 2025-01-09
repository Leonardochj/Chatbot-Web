@extends('layouts.headerAdmin')

@section('title', 'Administrador Material Lectura')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="contenedor-principal">
        <div class="contenedor">
            <div class="paginas">
                <p style="color: #6454C6">CRUD Roles</p>
            </div>
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
                            <th>PERMISOS</th>
                            <th>USUARIO</th>
                            <th>EDITAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $material)
                            <tr>
                                <td>{{ $material->permisos }}</td>
                                <td>{{ $material->usuario }}</td> <!-- Asegúrate de que 'usuario' es la columna correcta -->
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
                                        <input type="hidden" name="idMaterialLectura" value="{{ $material->id }}">
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
