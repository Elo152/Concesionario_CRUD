<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Detalles del coche</title>
</head>

<body>
    <header>
        <h1>Concesionario de coches</h1>
        <a href="{{route('index')}}"> Volver al listado de coches </a>
    </header>
    <main>
        <section class="card-container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Detalles del Coche</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Marca: {{$coche->marca}}</li>
                        <li class="list-group-item">Modelo: {{$coche->modelo}}</li>
                        <li class="list-group-item">Color: {{$coche->color}}</li>
                        <li class="list-group-item">Año: {{$coche->anyo}}</li>
                        <li class="list-group-item">Matrícula: {{$coche->matricula}}</li>
                        <li class="list-group-item">Precio: {{$coche->precio}}€</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy 2025 | Todos los derechos reservados</p>
    </footer>
</body>

</html>