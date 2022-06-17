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
    <form action="/insertarPelis" method="post">

{{csrf_field()}}
<div>
    <input type="text" placeholder="Nombre Película" name="nombre">
<br>
</div>
<div>
<input type="text" placeholder="Cine" name="cine">
<br>
</div>
<div>
    <input type="text" placeholder="Usuario" name="usuario">
    <br>
</div>
<div>
<input type="password" placeholder="Contraseña" name="pass">
<br>
</div>
<button name="insertarPelis">Insertar</button>
    </form>
</body>
</html>