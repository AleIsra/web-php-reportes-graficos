<?php

include('../../config/conexion.php');
include('../../config/verified.php');
include('../../config/helpers.php');
$id=decodeValue($_GET['id']);
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="DELETE FROM usuarios WHERE id = '{$id}'";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

header("Location: index.php");
?>