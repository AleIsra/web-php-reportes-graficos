<?php
include('../../config/conexion.php');
include('../../config/verified.php');
include('../../layout/header.php');
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$id=$user['id'];
$consulta="SELECT * FROM usuarios WHERE id={$id}";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta //aca es una matriz
$dato=mysqli_fetch_array($resultado);  //esto es ya un array


?>
  <div class="row">

    <div class="col-md-6">
       <div class="card sin_margenes">
        <div id="cabeza" class="card-header bg-dark text-white">
          <h4 class="mb-0"> MODIFICAR USUARIOS 
          </h4>
        </div>
        <div class="card-body">

        <form action="modules/acount/update.php" method="post" enctype="multipart/form-data">
    
          NOMBRE: <input class="form-control" type="text" name="nombre" value="<?=$dato['nombre']?>"><br>
          AVATAR: <input class="form-control" type="file" name="file" accept=".png"><br>
         
          <input type="submit" class="btn btn-warning" value="ACTUALIZAR">
        </form>
        </div>
      </div>
    </div>
    
    <div class="col-md-6">
        <img src="storage/users/<?=$id?>.png?<?=time()?>" class="img-thumbnail" alt="" width="300">
    </div>
    </div>
<br>
       
</body>
</html>
<?php
include('../../layout/footer.php');
?>
