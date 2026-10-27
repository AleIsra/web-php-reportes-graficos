

<?php
//mysqli(HOST, USUARIO, CONTRASEÑA, BD)

//conexion desde el script
include('../../config/conexion.php');
include('../../config/verified.php');
if($user['nivel']!='A'){
  header("Location: ../../ error-pages/401.html");
}
include('../../config/funciones.php');
include('../../layout/header.php');


// $conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="SELECT * FROM proveedor";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

?>


  <div class="row">

    <div class="col-md-12">
      <div class="card sin_margenes">
        <div id="cabeza" class="card-header bg-dark text-white">
          <h4 class="mb-0"> USUARIOS 
          <a href="modules/proveedor/create.php" class="btn btn-success">
          <i class="fas fa-plus"></i>   
          Adicionar</a>

          </h4>
        </div>
        <div class="card-body">
        <table class="table">
          <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>NIT</th>
            <th>REGIMEN</th>
            <th>RUBRO</th>
            <th>FECHA EXPIRACION</th>
          </tr>
          <?php while($dato=mysqli_fetch_array($resultado)){?>
            <tr>
              <td><?php echo $dato['id_proveedor']; ?></td>
      <td><?php echo $dato['nombre']; ?></td>
      <td><?php echo $dato['nit']; ?></td>
      <td><?php echo mostrarRegimen($dato['regimen']); ?></td>
      <td><?php echo mostrarRubro($dato['rubro']); ?></td>
      <td><?php echo fecha($dato['fecha_expiracion']); ?></td>
      <td>
                <a href="modules/proveedor/delete.php?id_proveedor=<?=encodeValue($dato['id_proveedor'])?>" class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar a <?=$dato['nombre']?>?')">
                <i class="fas fa-trash"></i>
                Eliminar</a>
                <a href="modules/proveedor/edit.php?id_proveedor=<?=encodeValue($dato['id_proveedor'])?>" class="btn btn-warning">
                <i class="fas fa-edit"></i>  
                Editar</a>
            </td>
            </tr>
          <?php } ?>
        </table>
        </div>
      </div>
    </div>
  </div>
  
<br>
</body>
</html>
<?php
include('../../layout/footer.php');
?>
