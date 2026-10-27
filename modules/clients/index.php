

<?php
//mysqli(HOST, USUARIO, CONTRASEÑA, BD)

//conexion desde el script
include('../../config/conexion.php');
include('../../config/verified.php');
include('../../layout/header.php');


// $conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="SELECT * FROM clientes";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

?>


  <div class="row">

    <div class="col-md-12">
      <div class="card sin_margenes">
        <div id="cabeza" class="card-header bg-dark text-white">
          <h4 class="mb-0"> CLIENTES 
          <a href="modules/clients/create.php" class="btn btn-success">
          <i class="fas fa-plus"></i>   
          Adicionar</a>

          </h4>
        </div>
        <div class="card-body">
        <table class="table">
          <tr>
            <th>ID</th>
            <th>NOMBRE COMERCIAL</th>
            <th>NOMBRE LEGAL</th>
            <th>NIT</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
            <th>RUBRO</th>
          </tr>
          <?php while($dato=mysqli_fetch_array($resultado)){?>
            <tr>
              <td><?=$dato['id']?></td>
              <td><?=$dato['nom_comercial']?></td>
              <td><?=$dato['nom_legal']?></td>
              <td><?=$dato['nit']?></td>
              <td><?=$dato['direccion']?></td>
              <td><?=$dato['telf']?></td>
              <td><?=$dato['rubro']?></td>
              <td>
                <a href="modules/clients/delete.php?id=<?=encodeValue($dato['id'])?>" class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar a <?=$dato['nom_comercial']?>?')">
                <i class="fas fa-trash"></i>
                Eliminar</a>
                <a href="modules/clients/edit.php?id=<?=encodeValue($dato['id'])?>" class="btn btn-warning">
                <i class="fas fa-edit"></i>  
                Editar</a>
            </td>
            </tr>
          <?php }?>
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
