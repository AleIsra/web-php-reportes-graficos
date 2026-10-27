<?php
include('../../config/conexion.php');
include('../../config/verified.php');
if($_POST){
  $id=$_POST['id'];
  $nombre=$_POST['nombre'];
  $cuenta=$_POST['cuenta'];
  $password=md5($_POST['password']);
  //$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
  $consulta="UPDATE usuarios SET nombre = '{$nombre}',
  cuenta='{$cuenta}',password='{$password}' WHERE id = {$id}";  //consulta
  $resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta
  
  header("Location: index.php");
}
include('../../layout/header.php');
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$id=decodeValue($_GET['id']);
$consulta="SELECT * FROM usuarios WHERE id={$id}";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta //aca es una matriz
$dato=mysqli_fetch_array($resultado);  //esto es ya un array


?>
  <div class="row">

    <div class="col-md-12">
       <div class="card sin_margenes">
        <div id="cabeza" class="card-header bg-dark text-white">
          <h4 class="mb-0"> MODIFICAR USUARIOS 
          </h4>
        </div>
        <div class="card-body">

        <form action="" method="post">
          <input class="form-control" type="hidden" name="id" value="<?=$dato['id']?>"><br>
          NOMBRE: <input class="form-control" type="text" name="nombre" value="<?=$dato['nombre']?>"><br>
          CUENTA: <input class="form-control" type="text" name="cuenta" value="<?=$dato['cuenta']?>"><br>
          PASSWORD: <input class="form-control" type="text" name="password" value="<?=$dato['password']?>"><br>
          <input type="submit" class="btn btn-warning" value="ACTUALIZAR">
        </form>
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
