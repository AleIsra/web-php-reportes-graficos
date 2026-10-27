<?php
include('../../config/conexion.php');
include('../../config/verified.php');
include('../../layout/header.php');
?>

<div class="row">

  <div class="col-md-12">
    <div class="card sin_margenes">
      <div id="cabeza" class="card-header bg-dark text-white">
        <h4 class="mb-0"> REGISTRAR PROVEEDOR </h4>
      </div>
      <div class="card-body">

        <form action="modules/proveedor/store.php" method="post">
          NOMBRE: <input class="form-control" type="text" name="nombre"><br>
          NIT: <input class="form-control" type="text" name="nit"><br>

          REGIMEN <br>
          <input type="radio" name="regimen" value="0" > NACIONAL
          <br>
          <input type="radio" name="regimen" value="1"> INTERNACIONAL
          <br>

          RUBRO
          <select class="form-control" name="rubro">
            <option value="A">Seleccione..</option>
            <option value="E">Energia</option>
            <option value="EL">Electromecanica</option>
            <option value="M">Mecanica</option>
          </select><br>

          FECHA EXPIRACION: <input class="form-control" type="date" name="fecha_expiracion"><br>

          <input type="submit" class="btn btn-success" value="REGISTRAR">
        </form>

      </div>
    </div>
  </div>
</div>
<br>

<?php include('../../layout/footer.php'); ?>