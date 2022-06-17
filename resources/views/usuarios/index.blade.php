<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OU YEA MAMI</h1>
    @foreach($misUsuarios as $miUsuario)

<p>{{$miUsuario->nombre}} {{$miUsuario->apellido}} {{$miUsuario->usuario}}</p>
<br>
<a style='color:pink;' href="editarForm/{{$miUsuario->id}}">Edita este usuario</a>
<br>
<a style='color:darkred;' href="borrar/{{$miUsuario->id}}">Borra este usuario</a>
    @endforeach
</body>
</html>