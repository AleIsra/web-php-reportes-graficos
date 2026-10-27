<?php


include('../../config/conexion.php');
include('../../config/verified.php');
$path="../../storage/users/";
$id=$user['id'];
$nombre=$_POST['nombre'];
$foto_name=$_FILES['foto']['name'];

//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="UPDATE usuarios SET nombre = '{$nombre}'  WHERE id = {$id}";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta
move_uploaded_file($_FILES['file']['tmp_name'],$path.$id.".png");
header("Location: profile.php");
?>