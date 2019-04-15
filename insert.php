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
    <br><br>
    <?php
        $nombre = $_REQUEST['nombre'];
        $edad = $_REQUEST['edad'];
        $a_paterno = $_REQUEST['a_paterno'];
        $a_materno = $_REQUEST['a_materno'];
        $numero_cuenta = $_REQUEST['numero_cuenta'];
        $direccion = $_REQUEST['direccion'];
        $pais = $_REQUEST['codigopais'];
        $tel = $_REQUEST['telefono'];

        insertarDatos($nombre,$edad,$a_paterno,$a_materno,$numero_cuenta,$direccion,$pais,$tel);
    ?>
</body>
</html>

<?php
function insertarDatos($nombre,$edad,$a_paterno,$a_materno,$numero_cuenta,$direccion,$pais,$tel)
{
    include 'credenciales.php';
    $conn = new mysqli($host_name,$user_name,$password,$database);

    if($conn->connect_error)
    {
        die('<p>Error al concectar con servidor MYSQL: '.mysqli_connect_error().'</p>');
    }
    else
    {
        $sql = "INSERT INTO alumnos values('$nombre',$edad,'$a_paterno','$a_materno','$numero_cuenta','$direccion','$pais','$tel')";
        $conn->query("SET NAMES utf8");
        if($conn->query($sql) === TRUE)
        { $res = "Se insertaron los daos correctamente!"; }
        else
        { $res = "Ocurrió un error al insertar los datos: ".$sql."<br>".$conn->error; }
    }
    echo $res;
    $conn->close();
    return $res;
}
?>