<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/estilosFinal.css') }}">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>

<body>
    <div class="inicio">
        <img src="../storage/app/public/img/inicioSesion.jpeg" alt="">
        <div class="sesion">
            <iconify-icon icon="material-symbols:person"></iconify-icon>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <br>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="grupoInput">
                    <label class="form-label" for="usuario">USUARIO</label>
                    <input class="caja" type="text" name="usuario" placeholder="Ingrese el usuario" required>
                </div>
                <div class="grupoInput">
                    <label class="form-label" for="password">CONTRASEÑA</label>
                    <input class="caja" type="password" name="password" placeholder="Ingrese la contraseña" required>
                </div>
                <a href="">
                    <h6>¿Olvidó su contraseña?</h6>
                </a>
                <button class="btn" type="submit">INGRESAR</button>
            </form>
            <a href="{{ route('registro') }}">
                <h5>REGISTRARSE</h5>
            </a>
        </div>
    </div>
</body>

</html>
