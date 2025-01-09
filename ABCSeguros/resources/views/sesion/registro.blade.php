<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/estilosFinal.css') }}">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
    <div class="inicio">
        <img src="../storage/app/public/img/inicioSesion.jpeg" alt="">
        <div class="sesion">
            <form action="{{ route('registro.store') }}" method="POST">
                @csrf
                <div class="grupoInput2">
                    <label class="form-label" for="nombre">NOMBRE</label>
                    <input class="caja" type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grupoInput2">
                    <label class="form-label" for="apellido">APELLIDO</label>
                    <input class="caja" type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido">
                    @error('apellido')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grupoInput2">
                    <label class="form-label" for="usuario">USUARIO</label>
                    <input class="caja" type="text" id="usuario" name="usuario" placeholder="Ingrese su nombre de usuario">
                    @error('usuario')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grupoInput2">
                    <label class="form-label" for="telefono">TELÉFONO</label>
                    <input class="caja" type="text" id="telefono" name="telefono" placeholder="Ingrese su número de teléfono">
                    @error('telefono')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grupoInput2">
                    <label class="form-label" for="correo">CORREO ELECTRÓNICO</label>
                    <input class="caja" type="email" id="correo" name="correo" placeholder="Ingrese el correo">
                    @error('correo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grupoInput2">
                    <label class="form-label" for="clave">CONTRASEÑA</label>
                    <input class="caja" type="password" id="clave" name="clave" placeholder="Ingrese la contraseña">
                    @error('clave')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn" type="submit">REGISTRARSE</button>
            </form>
        </div>
    </div>
</body>
</html>
