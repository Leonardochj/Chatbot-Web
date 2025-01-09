
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Sitio')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Lato&family=Roboto&family=Roboto+Condensed:wght@300&display=swap&family=Poppins:ital,wght@1,100&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .contenidoBanner {
            background-color: #f0f0f0;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .letraBanner a,
        .iconos a {
            color: #6454C6;
            text-decoration: none;
            margin: 0 10px;
        }

        .menu {
            background-color: #6454C6;
            padding: 10px 0;
        }

        .cabeceraPrincipal {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cabeceraPrincipal img {
            height: 50px;
            margin-left: 20px;
        }


        .menu-principal {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .menu-principal li {
            position: relative;
            display: inline-block;
        }

        .menu-principal a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .menu3 {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #ffffff;
            list-style: none;
            margin: 0;
            padding: 0;
            margin-left: -150%;
        }

        .menu-principal li:hover .menu3 {
            display: block;
        }

        .menu3 li {
            padding: 10px;
        }

        .menu3 hr {
            margin: 5px 0;
        }

        .menu3 form button {
            background: none;
            border: none;
            color: black;
            font-size: 16px;
            cursor: pointer;
        }

        .contenidoBanner {
            background-color: #f0f0f0;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .pie-de-pagina {
            background-color: #6454C6;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: 7%;
        }

        .pie-de-pagina h3,
        .pie-de-pagina hr,
        .pie-de-pagina a {
            margin: 10px 0;
            color: white;
        }

        .alineacion {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
        }

        .alineacion img {
            height: 100px;
            margin: 20px;
        }

        .texto3, .texto4 {
            text-align: left;
        }

        .texto3 h3, .texto4 h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .pie-de-pagina hr {
            width: 80%;
            margin: 10px auto;
        }

        .pie-de-pagina a {
            text-decoration: none;
            display: block;
            margin: 5px 0;
        }

        .pie-de-pagina a:hover {
            text-decoration: underline;
        }

        .pie-de-pagina h4 {
            margin: 20px 0 0;
        }

        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background-color: #FFFFFF;
            color: #6454C6;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        .card:hover{
            background-color: #6454C6;
            color: #ffffff;
        }

        .card i{
            height: 15%;
        }

        .card-title {
            font-size: 16px;
        }

        .card-value {
            font-size: 32px;
            color: #333;
        }

        .card-button {
            background-color: #6454C6;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 5px 10px;
            font-size: 14px;
            cursor: pointer;
        }

        .cursosActuales {
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="menu">
        <header class="cabeceraPrincipal">
            <img src="{{ asset('../storage/app/public/img/image 1.png') }}">
            <ul class="menu-principal">
                <li class="expanded">
                    <a href="#"><i class="fa-solid fa-user"></i></a>
                    <ul class="menu3">
                        <li class="leaf nombre-usuario">
                            @yield('usuario')
                        </li>
                        <hr>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit">Cerrar Sesión</button>
                        </form>
                    </ul>
                </li>
            </ul>
        </header>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <footer class="pie-de-pagina">
        <section class="alineacion">
            <img src="{{ asset('../storage/app/public/img/image 1.png') }}">
            <div class="texto3">
                <h3>ENLACES</h3>
                <hr>
                <div><a href="#">Sobre Nosotros</a></div>
                <div><a href="#">Nuestros Socios</a></div>
                <div><a href="#">Beneficios</a></div>
            </div>
            <div class="texto4">
                <h3>PÁGINAS DE INTERÉS</h3>
                <hr>
                <div><a href="#">Municipio de Loja</a></div>
                <div><a href="#">ECU 911</a></div>
                <div><a href="#">Bomberos</a></div>
            </div>
        </section>
        <hr>
        <h4>Copyright &copy; 2024 ABC Seguros</h4>
    </footer>
</body>

</html>
