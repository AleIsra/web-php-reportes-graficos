<?php
include('../../config/conexion.php');
include('../../config/verified.php');
include('../../layout/header.php');
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$id_proveedor=decodeValue($_GET['id_proveedor']);
$consulta="SELECT * FROM proveedor WHERE id_proveedor={$id_proveedor}";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta //aca es una matriz
$dato=mysqli_fetch_array($resultado);  //esto es ya un array


?>
<div class="row">
  <div class="col-md-12">
    <div class="card sin_margenes">
      <div id="cabeza" class="card-header bg-dark text-white">
        <h4 class="mb-0"> MODIFICAR USUARIOS </h4>
      </div>
      <div class="card-body">

        <form action="modules/proveedor/update.php" method="post">
          <input class="form-control" type="hidden" name="id_proveedor" value="<?=$dato['id_proveedor']?>"><br>

          NOMBRE: <input class="form-control" type="text" name="nombre" value="<?=$dato['nombre']?>"><br>
          NIT: <input class="form-control" type="text" name="nit" value="<?=$dato['nit']?>"><br>

          REGIMEN <br>
          <input type="radio" name="regimen" value="0" <?php if ($dato['regimen'] == 0) echo 'checked'; ?>> NACIONAL
          <br>
          <input type="radio" name="regimen" value="1" <?php if ($dato['regimen'] == 1) echo 'checked'; ?>> INTERNACIONAL
          <br>

          RUBRO
          <select class="form-control" name="rubro">
            <option value="A" <?php if ($dato['rubro'] == 'A') echo 'selected'; ?>>Seleccione..</option>
            <option value="E" <?php if ($dato['rubro'] == 'E') echo 'selected'; ?>>Energia</option>
            <option value="EL" <?php if ($dato['rubro'] == 'EL') echo 'selected'; ?>>Electromecanica</option>
            <option value="M" <?php if ($dato['rubro'] == 'M') echo 'selected'; ?>>Mecanica</option>
          </select><br>

          FECHA EXPIRACION: <input class="form-control" type="date" name="fecha_expiracion" value="<?=$dato['fecha_expiracion']?>"><br>

          <input type="submit" class="btn btn-warning" value="ACTUALIZAR">
        </form>
      </div>
    </div>
  </div>
</div>
<br>
<?php
include('../../layout/footer.php');
?>
