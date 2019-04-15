<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Practica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <a href = "index.php">Alta de Alumnos</a>
    <a href = "busqueda.php">Búsqueda de Alumnos</a>
    <a href = "bajas.php">Baja de Alumnos</a>
    <a href = "modificar.php">Modificacion de Alumnos</a>

    <h1>Busqueda de Alumnos</h1>
    <form action="buscar.php" method="POST">
        Ingrese nombre a buscar:
        <input type="text"  name="nombre">
        <br>
        <input type="submit" value="Buscar">
    </form>
    <form action="selectAll.php" method="POST">
        <input type="submit" value="Buscar todos">
    </form>
</body>
</html>