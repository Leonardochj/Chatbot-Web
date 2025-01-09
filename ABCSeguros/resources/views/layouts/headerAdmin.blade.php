<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Sitio')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                @php
                    $conexion = mysqli_connect('127.0.0.1', 'root', '', 'cmloja');
                    $SQL = 'SELECT MONTHNAME(fechaCuenta) AS mes, COUNT(id) AS cantidad FROM usuarios GROUP BY MONTH(fechaCuenta);';
                    $consulta = mysqli_query($conexion, $SQL);
                    while ($resultado = mysqli_fetch_assoc($consulta)) {
                        echo "['" . strval($resultado['mes']) . "'," . $resultado['cantidad'] . '],';
                    }
                @endphp
            ]);

            var options = {
                title: 'Usuarios por mes',
                backgroundColor: '#fff',
                chartArea: {
                    width: '80%',
                    height: '80%'
                },
                pieHole: 0.4,
                pieSliceBorderColor: '#ffffff',
                pieSliceText: 'none',
                slices: {
                    0: {
                        color: '#3366cc'
                    },
                    1: {
                        color: '#dc3912'
                    },
                    2: {
                        color: '#ff9900'
                    }
                }
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div class="contenedor-principal">
        <aside class="contenido">
            <p><img src="{{ asset('../storage/app/public/img/rectangle3.png') }}"></p>
            <p><iconify-icon icon="bi:pc-display" class="icono-panel"></iconify-icon>Panel de control</p>
            <hr class="linea-horizontal">
            <a href="{{ route('admin.index') }}"><iconify-icon icon="material-symbols:dashboard"
                    class="icono-panel"></iconify-icon>Dashboard</a>
            <a href="{{ route('adminUsuario.index', ['nombreUsuario' => $nombreUsuario]) }}"><iconify-icon
                    icon="solar:user-bold" class="icono-panel"></iconify-icon>Usuarios</a>
            <a href="{{ route('adminCurso.index', ['nombreUsuario' => $nombreUsuario]) }}"><iconify-icon
                    icon="wpf:books" class="icono-panel"></iconify-icon>Cursos</a>
            <a href="{{ route('adminLectura.index', ['nombreUsuario' => $nombreUsuario]) }}"><iconify-icon
                    icon="wpf:books" class="icono-panel"></iconify-icon>Material Lectura</a>
            <a href="{{ route('adminVideo.index', ['nombreUsuario' => $nombreUsuario]) }}"><iconify-icon icon="ph:video"
                    class="icono-panel"></iconify-icon>Videos</a>
        </aside>
        <div class="contenedor">
            <div class="cabecera">
                <h2 class="bienvenida">Bienvenido
                    @yield('usuario')
                </h2>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
