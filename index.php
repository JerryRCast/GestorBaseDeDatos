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
    <br><br>
    <h1>Alta de Alumnos</h1>
    <form action="insert.php" method="POST">
        Ingrese su nombre:
        <input type="text"  name="nombre">
        Ingrese su edad:
        <input type="number"  name="edad">
        Ingrese su apellido paterno:
        <input type="text"  name="a_paterno">
        Ingrese su apellido materno:
        <input type="text"  name="a_materno">
        Ingrese su numero de cuenta:
        <input type="number"  name="numero_cuenta">
        Ingrese su direccion:
        <input type="text"  name="direccion">
        Seleccione su país
        <select name="codigopais">
            <option value="1">EU</option>
            <option value="2">JAPÓN</option>
            <option value="3">MÉXICO</option>
        </select>
        Ingrese su telefono:
        <input type="number"  name="telefono">
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>