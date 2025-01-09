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
            margin-left: -30%;
        }

        .input-group {
            width: 200%;
            margin-bottom: 15px;
            margin-left: -45%;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .input-group input {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            border: 2px solid #63c485;
            background-color: #EAE9E9;
        }

        .text-danger {
            color: #f00;
            font-size: 12px;
        }

        .checkbox-container {
            width: 202%;
            margin-bottom: 15px;
            margin-left: -45%;
        }

        .terms-label {
            color: #54C696; /* Change this to the desired color */
        }

        .checkbox-container input {
            margin-right: 10px;
        }

        button {
            width: 202%;
            padding: 10px;
            background-color: #54C696;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin: -45%;
            margin-top: 10%;
        }

        .container img{
            width: 50%;
        }

        .text10{
            margin-top: 10%;
            
        }

        .login-text {
            color: #54C696;
            text-decoration: none;
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
                    <i class="fa-regular fa-user"></i><input type="text" id="nombre" name="nombre" placeholder="Username">
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <input type="text" id="apellido" name="apellido" placeholder="Email">
                    @error('apellido')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <input type="text" id="usuario" name="usuario" placeholder="Password">
                    @error('usuario')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <input type="text" id="telefono" name="telefono" placeholder="Confirm Password">
                    @error('telefono')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="terms" name="terms" onchange="toggleButton()">
                    <label for="terms">Accept &nbsp;</label><label for="terms" class="terms-label">terms and conditions</label>
                </div>
                <button type="submit">LOG IN</button>
                <div class="text10">
                    <span>Ya tienes una cuenta? </span><a href="#" class="login-text">Login now</a>
                </div>
            </form>
        </div>
        <img src="../storage/app/public/img/unsplash_EWmXFK7yT7Q.png" alt="Inicio de sesión">
    </div>
</body>
</html>
