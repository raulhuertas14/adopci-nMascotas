<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilo/estilos.css">
</head>
<body background="fondo.jpg">
    <h1>Registrar mascota</h1>
    <form action="procesar_registro.php" method="post">
        <div>
            Especie: <input type="text" name="e">
        </div>
        <div>
            Raza: <input type="text" name="r">
        </div>
        <div>
            Lugar: <input type="text" name="l">
        </div>
        <button>Enviar</button>
        </form>
</body>
</html>