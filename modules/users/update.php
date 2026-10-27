<?php


include('../../config/conexion.php');
include('../../config/verified.php');
include('../../config/verified.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$cuenta=$_POST['cuenta'];
$password=md5($_POST['password']);
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="UPDATE usuarios SET nombre = '{$nombre}',
cuenta='{$cuenta}',password='{$password}' WHERE id = {$id}";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

header("Location: index.php");
?>