<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego del Ahorcado</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        .palabra {
            font-size: 24px;
            margin: 20px 0;
            letter-spacing: 5px;
        }
        .intentos {
            font-size: 18px;
            margin-bottom: 20px;
        }
        input[type="text"] {
            font-size: 18px;
            width: 30px;
            text-align: center;
        }
        input[type="submit"] {
            font-size: 18px;
            padding: 5px 10px;
        }
        .mensaje {
            color: #d00;
            margin-top: 20px;
        }
    </style>
   </head>
<body>
    <h1>Juego del Ahorcado</h1>
    <div>Pista: {{ Session::get('categoria_nombre', 'No hay categoría') }}</div>
    <div>Palabra: {{ $palabra_mostrada }}</div>
    <div>Intentos restantes: {{ Session::get('intentos') }}</div>
    <form method="post" action="{{ url('/juego/adivinar') }}">
        @csrf
        <input type="text" name="letra" maxlength="1" required>
        <input type="submit" value="Adivinar">
    </form>
    @if (session('mensaje'))
        <div>{{ session('mensaje') }}</div>
    @endif


</body>
</html>
