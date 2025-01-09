<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Sitio')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .contenedor-principal {
            display: flex;
            width: 100%;
        }

        .contenido {
            width: 18%;
            background-color: #6454C6;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: auto;
            box-sizing: border-box; /* Para incluir el padding en la altura total */
        }

        .contenido img{
            margin-left: -2.5%;
        }

        .contenido a {
            color: white;
            text-decoration: none;
            margin: 11%;
            display: flex;
            align-items: center;
            font-size: 16px;
            overflow: hidden; /* Asegura que el pseudo-elemento no sobresalga del contenedor */
            padding: 10px 20px; /* Añade un poco de padding para el texto */
            transition: color 0.3s;
        }

        .contenido a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #6454C6;
            z-index: -1; /* Asegura que el color de fondo esté detrás del texto */
            border-radius: 15px;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s, background-color 0.3s;
        }

        .contenido a:hover::before {
            transform: scaleX(1); /* Expande el fondo al pasar el mouse */
            background-color: #FFFFFF; /* Cambia el color del fondo al pasar el mouse */
        }

        .contenido a:hover {
            background-color: #ffffff;
            color: #6454C6; /* Cambia el color del texto al pasar el mouse */
        }

        .contenido form{
            margin-top: 11%;
        }

        .contenido p {
            margin: 0;
        }

        .contenedor {
            width: 85%;
            padding: 20px;
            background-color: #ffffff;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            margin-left: -15px;
        }

        .cabecera {
            background-color: #ffffff;
            padding: 20px;
            margin-bottom: 20px;
        }

        .bienvenida {
            margin: 0;
            font-size: 24px;
            color: #6454C6;
        }

        .content {
            background-color: #ffffff;
            padding: 20px;
        }

        .contenido-pagina {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
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

        .boton-cerrar-sesion {
            background-color: #6454C6;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 14px;
            cursor: pointer;
            margin-top: auto;
        }
        .icono-panel {
            font-size: 35px; /* Ajusta este valor según el tamaño deseado */
            display: block; /* Hace que el icono sea un bloque para facilitar el centrado */
            text-align: center; /* Centra el icono dentro del enlace */
        }

        .contenido i{
            font-size: 35px; /* Ajusta este valor según el tamaño deseado */
            display: block; /* Hace que el icono sea un bloque para facilitar el centrado */
            text-align: center; /* Centra el icono dentro del enlace */
        }

        .table-responsive {
            overflow-x: visible;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }


        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table th {
            color: #6454C6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table-sm th,
        .table-sm td {
            padding: 0.3rem;
        }

        .table-bordered {
            border-collapse: collapse;
        }

        .table-bordered tr:nth-child(even) {
            background-color: #EAE9E9; /* Color plomo claro para las filas pares */
        }

        .table-bordered tr:nth-child(odd) {
            background-color: #ffffff; /* Color blanco para las filas impares */
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
            padding: 0.75rem;
            vertical-align: top;
        }

        .table-bordered thead th {
            border-bottom: 2px solid #dee2e6;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }

        /* Contenedor Principal */
        .contenedor-principal2 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
            background-color: #ffffff;
        }

        /* Contenedor de Formulario */
        .contenedor2 {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            width: 100%;
            max-width: 800px;
            margin-top: -20%;
        }

        /* Título */
        .paginas p {
            font-size: 24px;
            font-weight: bold;
            color: #6454C6;
            text-align: center;
        }

        /* Estilos del Formulario */
        form {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .grupoInput2 {
            flex: 1 1 calc(50% - 20px);
            display: flex;
            flex-direction: column;
        }

        .grupoInput2 label {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        .grupoInput2 input,
        .grupoInput2 select {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Estilo del Botón */
        .grupoInput2.full-width {
            flex: 1 1 100%;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .grupoInput2.full-width button {
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #6454C6;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        grupoInput2.full-width button:hover {
            background-color: #6454C6;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        /* Responsive Adjustments */
        @media (max-width: 600px) {
            .grupoInput2 {
                flex: 1 1 100%;
            }
        }

        /* Contenedor Principal */
        .contenedor-principal3 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
            background-color: #ffffff;
        }

        /* Contenedor de Formulario */
        .contenedor3 {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            width: 100%;
            max-width: 800px;
            margin-top: -20%;
        }

        /* Título */
        .paginas3 p {
            font-size: 24px;
            font-weight: bold;
            color: #6454C6;
            text-align: center;
        }

        /* Estilos del Formulario */
        form {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .grupoInput3 {
            flex: 1 1 calc(50% - 20px);
            display: flex;
            flex-direction: column;
        }

        .grupoInput3 label {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        .grupoInput3 input,
        .grupoInput3 select {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Estilo del Botón */
        .grupoInput3.full-width {
            flex: 1 1 100%;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .grupoInput3.full-width button {
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #6454C6;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        grupoInput3.full-width button:hover {
            background-color: #6454C6;
        }

        .error3 {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        /* Responsive Adjustments */
        @media (max-width: 600px) {
            .grupoInput3 {
                flex: 1 1 100%;
            }
        }
        </style>
    </head>
<body>
    <div class="contenedor-principal">
        <aside class="contenido">
            <p><img src="{{ asset('../storage/app/public/img/image 1.png') }}"></p>
            <a href="{{ route('admin.index') }}"><iconify-icon icon="material-symbols:dashboard" class="icono-panel"></iconify-icon></a>
            <a href="{{ route('adminUsuario.index', ['nombreUsuario' => $nombreUsuario]) }}"><iconify-icon icon="solar:user-bold" class="icono-panel"></iconify-icon></a>
            <a href="{{ route('adminCurso.index', ['nombreUsuario' => $nombreUsuario]) }}"><i class="fa-solid fa-gear"></i></a>
            <a href="{{ route('adminLectura.index', ['nombreUsuario' => $nombreUsuario]) }}"><i class="fa-solid fa-group-arrows-rotate"></i></a>
            <a href=""><i class="fa-solid fa-tag"></i></iconify-icon></a>
            <a href=""><i class="fa-solid fa-square-up-right"></i></a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="boton-cerrar-sesion" type="submit"><i class="fa-solid fa-right-to-bracket"></i></button>
            </form>
        </aside>
        <div class="contenedor">
            <div class="cabecera">
                <h2 class="bienvenida">Bienvenido/a de nuevo @yield('usuario')</h2>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
