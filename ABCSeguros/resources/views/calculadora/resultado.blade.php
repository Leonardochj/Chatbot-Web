<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 50px;
            background-color: #2C4A52;
        }

        .result-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2C4A52;
        }

        p {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h2>Resultados de la Calculadora</h2>
        <p>Cuota Periódica: {{ $C }}</p>
        <p>Intereses: {{ $I }}</p>
        <p>Amortización: {{ $A }}</p>
        <p>Total Pagado: {{ $totalPagado }}</p>

        <br>
        <a href="{{ route('calculadora') }}" style="display: inline-block; margin-top: 20px; padding: 10px 20px; 
        background-color: #2C4A52; color: #fff; text-decoration: none;
         border-radius: 5px;">Hacer nuevo cálculo</a>
    </div>
</body>
</html>
