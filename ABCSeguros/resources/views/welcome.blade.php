<!DOCTYPE html>
<html>

<head>
    <title>Index</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/estilosFinal.css') }}">
</head>

<body>
    <div class="contenidoBanner">
        <nav class="letraBanner">
            <a href="">SUSCRIBETE A NUESTROS BOLETINES </a>
            <a>|</a>    
            <a href=""><iconify-icon icon="solar:letter-linear" style="color: #2c4a52;"></iconify-icon></a>
            <a href=""> CORREO INSTITUCIONAL</a>
        </nav>
        <nav class="iconos">
            <a href=""><iconify-icon icon="bi:facebook" style="color: #2c4a52;"></iconify-icon></a>
            <a href=""><iconify-icon icon="mdi:instagram" style="color: #2c4a52;"></iconify-icon></a>
            <a href=""><iconify-icon icon="bi:youtube" style="color: #2c4a52;"></iconify-icon></a>
        </nav>
    </div>
    <div class="menu">
        <header class="cabeceraPrincipal">
            <img src="../storage/app/public/img/rectangle3.png">
            <nav class="navegacion">
                <a href="">NOSOTROS</a>
                <a href="">NUESTROS SOCIOS</a>
                <a href="">CONTACTANOS</a>
                
            </nav>
            <a href="{{route('iniciarSesion')}}" class="comienzo">COMENZAR</a>
        </header>
    </div>
    <div class="carrusel">
        <img src="../storage/app/public/img/emprendo2.png">
    </div>
    <div class="noticias">
        <div class="textoNoticias">
            <p><b>Últimas noticias</b></p>
            <div class="info"><p>Conoce lo más destacado de las actividades que nuestro gremio realiza</p></div>
        </div>
        <div class="columna">
            <nav class="noticia">
                <a><img src="../storage/app/public/img/Rectangle 10.png"></a>
                <p><b>Un día de Confraternidad en el nuevo Complejo
                        Deportivo de la Cámara de Comercio de Loja</b></p>
                <p>Hola, esto es un ejemplo</p>
                <button>Leer más <iconify-icon icon="maki:arrow" style="color: white;"></iconify-icon></button>
            </nav>
            <nav class="noticia">
                <a><img src="../storage/app/public/img/Rectangle 11.png"></a>
                <p><b>Un día de Confraternidad en el nuevo Complejo
                        Deportivo de la Cámara de Comercio de Loja</b></p>
                <p>Hola, esto es un ejemplo</p>
                <button>Leer más <iconify-icon icon="maki:arrow" style="color: white;"></iconify-icon></button>
            </nav>
            <nav class="noticia">
                <a><img src="../storage/app/public/img/Rectangle 12.png"></a>
                <p><b>Un día de Confraternidad en el nuevo Complejo
                        Deportivo de la Cámara de Comercio de Loja</b></p>
                <p>Hola, esto es un ejemplo</p>
                <button>Leer más <iconify-icon icon="maki:arrow" style="color: white;"></iconify-icon></button>
            </nav>
        </div>
    </div>
    <div class="conveniosContainer">
        <p><b>CONVENIOS</b></p>
        <div class="convenios">
            <img src="../storage/app/public/img/banner-convenios.jpg"> 
            <nav class="conveniosImg">
                <a href="https://www.clinicasanjose.cl/"><img src="../storage/app/public/img/San josé.png"></a>
                <a href="https://www.funerariajaramillo.com.ec/"><img src="../storage/app/public/img/funeraria.png"></a>
                <a href="https://edes.utpl.edu.ec/"><img src="../storage/app/public/img/edes.png"></a>
                <a href="https://fte.edu.ec/"><img src="../storage/app/public/img/Group 9.png"></a>
                <a href="https://itec.edu.ec/"><img src="../storage/app/public/img/itec.png"></a>
            </nav>
        </div>
    </div>
    <section class="misionVision">
        <article class="mision">
            <Section class="iconoSection">
                <iconify-icon class="iconoMision" icon="carbon:industry" style="color: rgba(50, 84, 105, 1);" width="57"
                    height="57"></iconify-icon>
                <p><b>NUESTRA MISIÓN</b></p>
            </Section>
            <p>Apoyar la promoción de nuestra ciudad en el ámbito nacional e internacional, como una fuente
                generadora de recursos; buscar mejores prácticas de gestión de emprendimiento; cooperar con
                instituciones públicas y privadas tendientes a elevar la capacidad empresarial y el desarrollo
                económico - social de todos los emprendedores.</p>
        </article>
        <article class="vision">
            <Section class="iconoSection">
                <iconify-icon class="iconoVision" icon="clarity:compass-line" style="color: white;" width="57"
                    height="57"></iconify-icon>
                <p><b>NUESTRA VISIÓN</b></p>
            </Section>
            <p>Representar y respaldar la actividad de los nuevos emprendedores lojanos,
                impulsandolos en el área de intercambio comercial,
                social y cultural a nivel nacional e internacional.</p>
        </article>

    </section>
    <div class="sugerencias">
        <img src="../storage/app/public/img/Apartado de Contacto.png">
    </div>

    <footer class="pie-de-pagina2">
        <section class="alineacion">
            <img src="../storage/app/public/img/rectangle3.png">
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