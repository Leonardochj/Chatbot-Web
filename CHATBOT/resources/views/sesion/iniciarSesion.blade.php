<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #6454C6;
        }

        .container {
            display: flex;
            flex: 1;
            width: 100%;
            height: 100%;
        }

        .login-box {
            position: relative;
            width: 50%;
            background-color: #6454C6;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box img {
            position: absolute;
            top: 0;
            left: 0;
            width: auto;
            height: auto;
        }

        .login-form {
            background-color: #ffffff;
            padding: 40px;
            box-sizing: border-box;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-form h2 {
            margin: 0 0 20px;
            color: #333;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-form input[type="checkbox"] {
            margin-right: 10px;
        }

        .login-form .cont {
            margin-top: 8%;
        }

        .login-form a {
            color: #6454C6;
            text-decoration: none;
            font-size: 14px;
        }

        .login-form button {
            margin-top: 18%;
            width: 100%;
            padding: 10px;
            background-color: #6454C6;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .login-form .register {
            margin-top: 10%;
            text-align: center;
            color: #6454C6;
        }

        .container img {
            width: 50%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-box">
            <img src="../storage/app/public/img/image 1.png" alt="">
            <div class="login-form">
                <h2>Ya tienes una cuenta?</h2>
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
                    <input name="usuario" type="text" placeholder="Usuario" required>
                    <input name="password" type="password" placeholder="Password" required>
                    <div class="cont">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                        <a href="#" style="float: right;">Forgot Password?</a>
                    </div>
                    <button type="submit">Login</button>
                </form>
                <div class="register">
                    <a href="{{ route('registro') }}">Register</a>
                </div>
            </div>
        </div>
        <img src="../storage/app/public/img/unsplash_EWmXFK7yT7Q.png">
    </div>
</body>

</html>

