<?php
//mysqli(HOST, USUARIO, CONTRASEÑA, BD)
include('../../config/conexion.php');
include('../../config/verified.php');
if($_POST){

  $path="../../storage/products/";
  $producto=($_POST['producto']);
  $detalles=($_POST['detalles']);
  $pu=$_POST['pu'];
  $obs=($_POST['obs']);
  $foto_name=$_FILES['foto']['name'];
  
  
  //$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
  $consulta="INSERT INTO productos VALUES(NULL,'{$producto}','{$detalles}','{$pu}','{$obs}','{$foto_name}')";  //consulta
  //echo $consulta; exit;
  $resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta
  if(isset($_FILES['file'])&&$_FILES['file']['error']===UPLOAD_ERR_OK){
    move_uploaded_file($_FILES['foto']['tmp_name'],$path.$foto_name);
  }
  
  
  header("Location: index.php");
  exit();
}
include('../../layout/header.php');
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
// $consulta="SELECT * FROM usuarios";  //consulta
// $resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

?>


  <div class="row">

    <div class="col-md-12">
      <div class="card sin_margenes">
        <div id="cabeza" class="card-header bg-dark text-white">
          <h4 class="mb-0"> ADICIONAR PRODUCTO </h4>
        </div>
        <div class="card-body">

        <form action="" method="post" enctype="multipart/form-data" accept=".jpg,.png">
          PRODUCTO: <input class="form-control" type="text" name="producto"><br>
          DETALLES: <input class="form-control" type="text" name="detalles"><br>
          PU: <input class="form-control" type="text" name="pu"><br>
          OBSERVACIONES: <input class="form-control" type="text" name="obs"><br>
          IMAGEN: <input class="form-control" type="file" name="foto"><br>
          <input type="submit" class="btn btn-success" value="REGISTRAR">
          
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
