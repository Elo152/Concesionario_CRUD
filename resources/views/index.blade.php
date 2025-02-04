<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Concesionario de coches</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <header>
        <h1>Concesionario de coches</h1>
    </header>
    <main>
        <div class="boton-crear">
            <a href="{{route('registro')}}" class="boton"> Crear coche </a>
        </div>
        <div class="tabla">
            <ul>
                @foreach($coches as $coche)
                    <div class="coche-unico">
                        <li>{{$coche->marca }} {{$coche->modelo }}</li>
                        <a href="{{route('mostrar', $coche->id)}}">Detalles del coche</a>
                        <a href="{{route('editar', $coche->id)}}">Editar coche</a>

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
    </main>
    <footer></footer>
</body>

</html>