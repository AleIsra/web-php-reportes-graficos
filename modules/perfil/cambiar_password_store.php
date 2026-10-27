<?php

include('../../config/conexion.php');
include('../../config/verified.php');

$passwordActualPost = md5($_POST['password_actual'] ?? '');
$nueva = $_POST['nueva_password'] ?? '';
$confirmar = $_POST['confirmar_password'] ?? '';

if($passwordActualPost !== $_SESSION['password']){
    header("Location: cambiar_password.php?err=actual");
    die();
}

if($nueva !== $confirmar){
    header("Location: cambiar_password.php?err=coincide");
    die();
}


$patron = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,}$/';
if(!preg_match($patron, $nueva)){
    header("Location: cambiar_password.php?err=reglas");
    die();
}


$cuenta = $_SESSION['cuenta'];
$nuevaHash = md5($nueva);
$consulta = "UPDATE usuarios SET password='{$nuevaHash}' WHERE cuenta='{$cuenta}'";
mysqli_query($conexion, $consulta);


$_SESSION['password'] = $nuevaHash;

header("Location: cambiar_password.php?ok=1");
?>
