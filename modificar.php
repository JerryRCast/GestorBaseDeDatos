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

    <h1>Baja de Alumnos</h1>
    <form action="update.php" method="POST">
        LLene los campos a modificar:
        <br><br>
        Nombre:
        <input type="text"  name="nombre">
        <br>
        Nuevo Numero de Cuenta:
        <input type="number"  name="num_cta">
        <br>
        Nuevo Pais:
        <select name="codigopais">
            <option value="1">EU</option>
            <option value="2">JAPÓN</option>
            <option value="3">MÉXICO</option>
        </select>
        <input type="submit" value="Modificar">
    </form>
</body>
</html>