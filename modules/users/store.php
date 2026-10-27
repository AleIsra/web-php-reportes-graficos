<?php
include('../../config/conexion.php');
include('../../config/verified.php');

$path = "../../storage/users/";

$nombre   = mysqli_real_escape_string($conexion, $_POST['nombre']);
$cuenta   = mysqli_real_escape_string($conexion, $_POST['cuenta']);
$password = md5($_POST['password']);
$nivel    = mysqli_real_escape_string($conexion, $_POST['nivel']);


$consulta = "INSERT INTO usuarios (nombre, cuenta, password, nivel) VALUES ('{$nombre}', '{$cuenta}', '{$password}', '{$nivel}')";
$resultado = mysqli_query($conexion, $consulta);


$id = mysqli_insert_id($conexion);

if (file_exists($path . "PerfilPredef.png")) {
    copy($path . "PerfilPredef.png", $path . $id . ".png");
}

header("Location: index.php");
exit();
?>