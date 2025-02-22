<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Concesionario de coches</title>
</head>

<body>
    <header>
        <h1>Concesionario de coches</h1>
        <a href="{{route('index')}}"> Volver al listado de coches </a>
    </header>
    <main>
        <div class="boton-crear">
            <a href="{{route('registro')}}" class="boton"> Registrar un nuevo coche </a>
        </div>
        <h2>Listado de coches actuales</h2>
        <div class="tabla-container">
            <div class="tabla">
                <ul>
                    @foreach($coches as $coche)
                        <div class="coche-unico">
                            <li>{{$coche->marca }} {{$coche->modelo }}</li>
                            <a href="{{route('mostrar', $coche->id)}}">Detalles del coche</a>
                            <a href="{{route('editar', $coche->id)}}">Editar datos del coche</a>

                            <form action="{{ route('eliminar', $coche->id) }}" method="POST" style="display:inline;"
                                onsubmit="return confirm('¿Estás seguro de que quieres eliminar este coche?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar coche</button>
                            </form>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy 2025 | Todos los derechos reservados</p>
    </footer>
</body>

</html>