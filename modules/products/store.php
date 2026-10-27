<?php
include('../../config/conexion.php');
include('../../config/verified.php');
$path="../../storage/products/";
$producto=($_POST['producto']);
$detalles=($_POST['detalles']);
$pu=$_POST['pu'];
$obs=($_POST['obs']);
$foto_name=$_FILES['foto']['name'];


//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="INSERT INTO productos VALUES(NULL,'{$producto}','{$detalles}','{$pu}','{$obs}','{$foto_name}')";  //consulta
//echo $consulta; exit;
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

move_uploaded_file($_FILES['foto']['tmp_name'],$path.$foto_name);

header("Location: index.php");
?>