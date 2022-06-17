<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>INSERTAR USUARIOS</h1>
    <form action="/editar/<?php echo $usuario[0]->id ?>" method="post">

{{csrf_field()}}
<div>
    <input value="<?php echo $usuario[0]->nombre ?>" type="text" placeholder="Nombre" name="nombre">
<br>
</div>
<div>
<input type="text"  value="<?php echo $usuario[0]->apellido ?>" placeholder="Apellido" name="apellido">
<br>
</div>
<div>
    <input type="text" value="<?php echo $usuario[0]->usuario ?>" placeholder="Usuario" name="usuario">
    <br>
</div>
<button name="editar">Editar</button>
    </form>
</body>
</html>