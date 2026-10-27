<?php

include('../../config/conexion.php');
include('../../config/verified.php');
include('../../config/helpers.php');
$Id=(int)decodeValue($_GET['Id']);
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="DELETE FROM productos WHERE Id = '{$Id}'";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

header("Location: index.php");
?>