<?php

include('../../config/conexion.php');
include('../../config/verified.php');

$nombre = $_POST['nombre'];
$nit = $_POST['nit'];
$regimen = $_POST['regimen'];
$rubro = $_POST['rubro'];
$fecha_expiracion = $_POST['fecha_expiracion'];

$consulta = "INSERT INTO proveedor (nombre, nit, regimen, rubro, fecha_expiracion) VALUES ('{$nombre}','{$nit}','{$regimen}','{$rubro}','{$fecha_expiracion}')";
$resultado = mysqli_query($conexion, $consulta);

header("Location: index.php");
exit();