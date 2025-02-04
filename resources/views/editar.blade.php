<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar coche</title>
</head>
<body>
<a href="{{route('index')}}"> Inicio </a>
<h1>Editar coche</h1>
<form action="{{ route('actualizar', $coche->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="marca">Marca:</label>
    <input type="text" id="marca" name="marca" value="{{ old('marca', $coche->marca) }}" required><br><br>

    <label for="modelo">Modelo:</label>
    <input type="text" id="modelo" name="modelo" value="{{ old('modelo', $coche->modelo) }}" required><br><br>

    <label for="color">Color:</label>
    <input type="text" id="color" name="color" value="{{ old('color', $coche->color) }}" required><br><br>

    <label for="matricula">Matrícula:</label>
    <input type="text" id="matricula" name="matricula" value="{{ old('matricula', $coche->matricula) }}" required><br><br>

    <button type="submit">Guardar cambios</button>
</form>
</body>
</html>
