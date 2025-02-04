<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de coche</title>
</head>
<body>
    <main>
        <a href="{{route('index')}}"> Inicio </a>

        <h1>Registro de coches</h1>
        <form action="{{ route(('guardar')) }}" method="post">
            @csrf
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" required>
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" required>
            <label for="color">Color</label>
            <input type="text" name="color" id="color" required>
            <label for="modelo">Matricula</label>
            <input type="text" name="matricula" id="matricula" required>
            <button type="submit">Registrar coche</button>
        </form>
    </main>
</body>
</html>
