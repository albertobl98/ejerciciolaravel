<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mis Peliculas</h1>
    @foreach($misPelis as $miPeli)

    <p>{{$miPeli->nombre}} {{$miPeli->cine}} {{$miPeli->usuarioPelicula}}</p>
    <br>
<a style='color:darkred;' href="borrarPeli/{{$miPeli->id}}">Borra este pelicula</a>
    @endforeach

</body>
</html>