<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #ffffff;
        }

        .container {
            display: flex;
            width: 100%;
            height: 100%;
        }

        .image-box {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .form-box {
            flex: 1;
            background-color: #ffffff;
            padding: 40px;
            box-sizing: border-box;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .form-box h1 {
            margin: 0 0 20px;
            color: #333;
            margin-left: -28%;
        }

        .input-group {
            width: 100%;
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .input-group input {
            width: 150%;
            margin-left: -30%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            border: 2px solid #6454C6;
            background-color: #EAE9E9;
        }

        .text-danger {
            color: #f00;
            font-size: 12px;
        }

        .checkbox-container {
            width: 100%;
            margin-bottom: 15px;
        }

        .terms-label {
            color: #6454C6;
        }

        .checkbox-container input {
            margin-right: 10px;
        }

        button {
            width: 160%;
            margin-left: -30%; 
            padding: 10px;
            background-color: #6454C6;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .login-text {
            color: #6454C6;
            text-decoration: none;
        }

        .container img {
            width: 50%;
        }

        .text10 {
            margin-top: 10%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1>Crea tu cuenta!</h1>
            <form action="{{ route('registro.store') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido">
                    @error('apellido')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <input type="text" id="usuario" name="usuario" placeholder="Ingrese su nombre de usuario">
                    @error('usuario')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <input type="text" id="telefono" name="telefono" placeholder="Ingrese su número de teléfono">
                    @error('telefono')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <input type="email" id="correo" name="correo" placeholder="Ingrese el correo">
                    @error('correo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <input type="password" id="clave" name="clave" placeholder="Ingrese la contraseña">
                    @error('clave')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit">REGISTRARSE</button>
                <div class="text10">
                    <span>¿Ya tienes una cuenta? </span><a href="#" class="login-text">Inicia sesión</a>
                </div>
            </form>
        </div>
        <img src="../storage/app/public/img/unsplash_EWmXFK7yT7Q.png" alt="Inicio de sesión">
    </div>
</body>
</html>

