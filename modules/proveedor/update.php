<?php


include('../../config/conexion.php');
include('../../config/verified.php');
include('../../config/verified.php');
$id_proveedor=$_POST['id_proveedor'];
$nombre=$_POST['nombre'];
$nit=$_POST['nit'];
$regimen=$_POST['regimen'];
$rubro=$_POST['rubro'];
$fecha_expiracion=$_POST['fecha_expiracion'];
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="UPDATE proveedor SET nombre = '{$nombre}',
nit='{$nit}',regimen='{$regimen}',rubro='{$rubro}',fecha_expiracion='{$fecha_expiracion}' WHERE id_proveedor = {$id_proveedor}";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

header("Location: index.php");
?>