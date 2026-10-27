<?php
include('../../config/conexion.php');
include('../../config/verified.php');
if($_POST){
$path = "../../storage/products/";
    $Id = $_POST['Id'];
    $producto = mysqli_real_escape_string($conexion, $_POST['producto']);
    $detalles = mysqli_real_escape_string($conexion, $_POST['detalles']);
    $pu = $_POST['pu'];
    $obs = mysqli_real_escape_string($conexion, $_POST['obs']);

    // 1. PRIMERO: Consultamos la base de datos para obtener la foto que ya tenía guardada
    $consulta_actual = "SELECT foto FROM productos WHERE Id = {$Id}";
    $resultado_actual = mysqli_query($conexion, $consulta_actual);
    $producto_actual = mysqli_fetch_assoc($resultado_actual);
    

    $nombre_foto_final = $producto_actual['foto']; 

  
    if(isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK){
        $foto_name = $_FILES['foto']['name'];
        $foto_tmp = $_FILES['foto']['tmp_name'];


        move_uploaded_file($foto_tmp, $path . $nombre_foto_final);
    }

    $consulta = "UPDATE productos SET 
                    producto = '{$producto}',
                    detalles = '{$detalles}',
                    pu = '{$pu}',
                    obs = '{$obs}',
                    foto = '{$nombre_foto_final}' 
                 WHERE Id = {$Id}";
                 
    $resultado = mysqli_query($conexion, $consulta);

    // 4. Redirigir a la lista
    header("Location: index.php");
    exit();

  header("Location: index.php");
}
include('../../layout/header.php');
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$Id=decodeValue($_GET['Id']);
$consulta="SELECT * FROM productos WHERE Id={$Id}";  //consulta
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

        <form action="" method="post" enctype="multipart/form-data" accept=".jpg,.png">
          <input class="form-control" type="hidden" name="Id" value="<?=$dato['Id']?>"><br>
                   PRODUCTO: <input class="form-control" type="text" name="producto" value="<?=$dato['producto']?>"><br>
          DETALLES: <input class="form-control" type="text" name="detalles" value="<?=$dato['detalles']?>"><br>
          PU: <input class="form-control" type="text" name="pu" value="<?=$dato['pu']?>"><br>
          OBSERVACIONES: <input class="form-control" type="text" name="obs" value="<?=$dato['obs']?>"><br> 
          IMAGEN: <input class="form-control" type="file" name="foto"><br>
          <input type="submit" class="btn btn-warning" value="ACTUALIZAR"> <br>
          
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
