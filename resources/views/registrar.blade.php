<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Registro de coche</title>
</head>

<body>
    <header>
        <h1>Concesionario de coches</h1>
        <a href="{{route('index')}}"> Volver al listado de coches </a>
    </header>
    <main>
        <div class="form-container">
            <form action="{{ route(('guardar')) }}" method="post" class="form-register">
                @csrf
                <h2 class="titulo">Registrar nuevo coche</h2>
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" required>

                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" id="modelo" required>

                <label for="color">Color</label>
                <input type="text" name="color" id="color" required>

                <label for="anyo">Año</label>
                <input type="number" name="anyo" id="anyo" required>

                <label for="modelo">Matricula</label>
                <input type="text" name="matricula" id="matricula" required>

                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" required>

                <button type="submit">Registrar coche</button>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy 2025 | Todos los derechos reservados</p>
    </footer>
</body>

</html>