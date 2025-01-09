    @extends('layouts.headerAdmin')

    @section('title', 'Administrador Cursos')

    @section('usuario')
        {{ $nombreUsuario }}
    @endsection

    @section('content')
    <div class="contenedor-principal2">

        <div class="contenedor2">
            <div class="paginas">
                <p style="color: #54C696">CONFIGURACIÓN DE LA MARCA</p>
            </div>
            <section>
                <form action="" method="POST">
                    <div class="grupoInput2">
                        <label for="nombre">Marca</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Escriba el nombre de la marca">
                    </div>
                    <div class="grupoInput2">
                        <label for="apellido">Tipografía</label>
                        <select name="rol" id="rol">
                            <option>Seleccione tipografía</option>
                            <option>Admin</option>
                            <option>Estudiante</option>
                        </select>
                    </div>
                    <div class="grupoInput2">
                        <label for="usuario">Logo Principal</label>
                        <input type="text" id="usuario" name="usuario" placeholder="Logo_prin.img">
                    </div>
                    <div class="grupoInput2">
                        <label for="rol">Logo Secundario</label>
                        <input type="text" id="usuario" name="usuario" placeholder="Logo_secu.img">
                    </div>
                    <div class="grupoInput2">
                        <label for="telefono">Colores Principales</label>
                        <input type="text" id="telefono" name="telefono" placeholder="Escoga un color">
                        <input type="text" id="telefono" name="telefono" placeholder="Escoga un color">
                        <input type="text" id="telefono" name="telefono" placeholder="Escoga un color">
                    </div>
                    <div class="grupoInput2">
                        <label for="correo">Colores Secundarios</label>
                        <input type="text" id="telefono" name="telefono" placeholder="Escoga un color">
                        <input type="text" id="telefono" name="telefono" placeholder="Escoga un color">
                    </div>
                    <div class="grupoInput2 full-width">
                        <button type="submit">Guardar</button>
                    </div>
                </form>

            </section>

        </div>
    </div>
    @endsection
