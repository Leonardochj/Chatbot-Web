<!DOCTYPE html>
<html>

<head>
    <title>Index</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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

        .navegacion a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-weight: bold;
        }

        .comienzo {
            background-color: rgba(153, 161, 158, 0.7);;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 20px;
        }

        .carrusel {
            position: relative;
            text-align: center;
        }

        .carrusel img {
            width: 100%;
            height: auto;
            filter: brightness(0.7);
        }

        .carrusel .textoCarrusel {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            font-size: 120px;
            font-family: 'Roboto', sans-serif;
        }

        .pie-de-pagina2 {
            background-color: #6454C6;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .pie-de-pagina2 h3,
        .pie-de-pagina2 hr,
        .pie-de-pagina2 a {
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

        .pie-de-pagina2 hr {
            width: 80%;
            margin: 10px auto;
        }

        .pie-de-pagina2 a {
            text-decoration: none;
            display: block;
            margin: 5px 0;
        }

        .pie-de-pagina2 a:hover {
            text-decoration: underline;
        }

        .pie-de-pagina2 h4 {
            margin: 20px 0 0;
        }

    </style>
</head>

<body>
    <div class="contenidoBanner">
        <nav class="letraBanner">
            <a href="">SUSCRIBETE A NUESTROS BOLETINES </a>
            <a>|</a>    
            <a href=""><iconify-icon icon="solar:letter-linear" style="color: #6454C6;"></iconify-icon></a>
            <a href=""> CORREO INSTITUCIONAL</a>
        </nav>
        <nav class="iconos">
            <a href=""><iconify-icon icon="bi:facebook" style="color: #6454C6;"></iconify-icon></a>
            <a href=""><iconify-icon icon="mdi:instagram" style="color: #6454C6;"></iconify-icon></a>
            <a href=""><iconify-icon icon="bi:youtube" style="color: #6454C6;"></iconify-icon></a>
        </nav>
    </div>
    <div class="menu">
        <header class="cabeceraPrincipal">
            <img src="../storage/app/public/img/image 1.png">
            <nav class="navegacion">
                <a href="">NOSOTROS</a>
                <a href="">NUESTROS SOCIOS</a>
                <a href="">CONTACTANOS</a>
                
            </nav>
            <a href="{{route('iniciarSesion')}}" class="comienzo">COMENZAR</a>
        </header>
    </div>
    <div class="carrusel">
        <img src="../storage/app/public/img/2400x1600-seguro-de-vida-que-es.jpg.img.2400.1647593444725.jpg">
        <div class="textoCarrusel">Protege tu futuro, asegura tu tranquilidad</div>
    </div>
    <footer class="pie-de-pagina2">
        <section class="alineacion">
            <img src="../storage/app/public/img/image 1.png">
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