<?php

$cuenta=$_SESSION['cuenta'];
$password=$_SESSION['password'];
$token=$_SESSION['token'];
$consulta="SELECT id,nombre,nivel FROM usuarios WHERE cuenta='{$cuenta}' AND password='{$password}'AND token='{$token}'";
//echo($consulta);exit;

//consulta
$resultado=mysqli_query($conexion,$consulta);
if(mysqli_num_rows($resultado)==0){
   
    header("Location: ../../index.php?sw=2");
}
$user=$dato=mysqli_fetch_array($resultado);
?>