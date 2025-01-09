
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Sitio')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/estilosFinal.css') }}">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>

<body>
    <div class="menu">
        <header class="cabeceraPrincipal">
            <img src="{{ asset('../storage/app/public/img/rectangle3.png') }}">
            <nav class="navegacion">
                <a href="{{ route('cursos.index') }}">CURSOS</a>
                <a href="{{ route('calculadora')}}">CALCULADORA</a>
            </nav>
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
            <img src="{{ asset('../storage/app/public/img/rectangle3.png') }}">
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
        <h4>Copyright &copy; 2023 Cámara de Comercio Loja</h4>
    </footer>
</body>

</html>
