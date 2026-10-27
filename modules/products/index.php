<?php
//mysqli(HOST, USUARIO, CONTRASEÑA, BD)

//conexion desde el script
include('../../config/conexion.php');
include('../../config/verified.php');
include('../../layout/header.php');


// $conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="SELECT * FROM productos";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

?>


  <div class="row">

    <div class="col-md-12">
      <div class="card sin_margenes">
        <div id="cabeza" class="card-header bg-dark text-white">
          <h4 class="mb-0">Productos
          <?php if($user['nivel']=='A'||$user['nivel']=='O'){ ?>
          <a href="modules/products/create.php" class="btn btn-success">
          <i class="fas fa-plus"></i>   
          Adicionar</a>
        <?php }?>
          </h4>
        </div>
        <div class="card-body">
        <table class="table">
          <tr>
            <th>ID</th>
            <th>FOTO</th>
            <th>PRODUCTO</th>
            <th>DETALLES</th>
            <th>PU</th>
            <th>OBSERVACIONES</th>
                    <?php if($user['nivel']=='A'){ ?>
            <th>ACCIONES</th>
            <?php }?>
          </tr>
          <?php while($dato=mysqli_fetch_array($resultado)){ ?>
            <tr>
              <td><?=$dato['Id']?></td>
              <td> <img src="storage/products/<?=$dato['foto']?>" width="100" class="img-thumbnail" alt=""></td>
              <td><?=$dato['producto']?></td>
              <td><?=$dato['detalles']?></td>
              <td><?=num($dato['pu'])?></td>
              <td><?=$dato['obs']?></td>
                      <?php if($user['nivel']=='A'||$user['nivel']=='O'){ ?>
              <td>
                <?php if($user['nivel']=='A'){ ?>
                <a href="modules/products/delete.php?Id=<?=encodeValue($dato['Id'])?>" class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar a <?=$dato['producto']?>?')">
                <i class="fas fa-trash"></i>
                Eliminar</a>
                <?php }?>
                <a href="modules/products/edit.php?Id=<?=encodeValue($dato['Id'])?>" class="btn btn-warning">
                <i class="fas fa-edit"></i>  
                Editar</a>
            </td>
            <?php }?>
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
