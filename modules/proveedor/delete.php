<?php

include('../../config/conexion.php');
include('../../config/verified.php');
if($user['nivel']!='A'){
  header("Location: ../../error-pages/401.html");
}
include('../../config/helpers.php');
$id_proveedor=decodeValue($_GET['id_proveedor']);


//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="DELETE FROM proveedor WHERE id_proveedor = '{$id_proveedor}'";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

header("Location: index.php");
?>