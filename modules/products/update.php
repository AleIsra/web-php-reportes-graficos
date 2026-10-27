<?php

include('../../config/conexion.php');
include('../../config/verified.php');
$Id=$_POST['Id'];
$producto=$_POST['producto'];
$detalles=$_POST['detalles'];
$pu=$_POST['pu'];
$obs=$_POST['obs'];

//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="UPDATE productos SET producto = '{$producto}',
detalles='{$detalles}',pu='{$pu}',obs='{$obs}' WHERE Id = {$Id}";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

header("Location: index.php");
?>