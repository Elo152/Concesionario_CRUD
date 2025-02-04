<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del coche</title>
</head>
<body>
<a href="{{route('index')}}"> Inicio </a>
<h1>Detalles del coche</h1>
<main>
    <ul>
        <li>Marca: {{$coche->marca}}</li>
        <li>Modelo: {{$coche->modelo}}</li>
        <li>Color: {{$coche->color}}</li>
        <li>Matrícula: {{$coche->matricula}}</li>
    </ul>
</main>
</body>
</html>
