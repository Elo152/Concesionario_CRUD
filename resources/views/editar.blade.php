<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Editar coche</title>
</head>

<body>
    <header>
        <h1>Concesionario de coches</h1>
        <a href="{{route('index')}}"> Volver al listado de coches </a>
    </header>
    <main>
        <div class="form-container">
            <form action="{{ route('actualizar', $coche->id) }}" method="POST" class="form">
                @csrf
                @method('PUT')
                <h2 class="titulo">Editar datos del coche</h2>

                <label for="marca">Marca</label>
                <input type="text" id="marca" name="marca" value="{{ old('marca', $coche->marca) }}" required>

                <label for="modelo">Modelo</label>
                <input type="text" id="modelo" name="modelo" value="{{ old('modelo', $coche->modelo) }}" required>

                <label for="color">Color</label>
                <input type="text" id="color" name="color" value="{{ old('color', $coche->color) }}" required>

                <label for="anyo">Año</label>
                <input type="number" id="anyo" name="anyo" value="{{ old('anyo', $coche->anyo) }}" required>

                <label for="matricula">Matricula</label>
                <input type="text" id="matricula" name="matricula" value="{{ old('matricula', $coche->matricula) }}"
                    required>

                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" value="{{ old('precio', $coche->precio) }}" required>


                <button type="submit">Guardar cambios</button>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy 2025 | Todos los derechos reservados</p>
    </footer>
</body>

</html>