<?php
//mysqli(HOST, USUARIO, CONTRASEÑA, BD)
include('../../config/conexion.php');
include('../../config/verified.php');
if($_POST){
  $path = "../../storage/users/";

$nombre   = mysqli_real_escape_string($conexion, $_POST['nombre']);
$cuenta   = mysqli_real_escape_string($conexion, $_POST['cuenta']);
$password = md5($_POST['password']);
$nivel    = mysqli_real_escape_string($conexion, $_POST['nivel']);


$consulta = "INSERT INTO usuarios (nombre, cuenta, password, nivel) VALUES ('{$nombre}', '{$cuenta}', '{$password}', '{$nivel}')";
$resultado = mysqli_query($conexion, $consulta);


$id = mysqli_insert_id($conexion);

if (file_exists($path . "PerfilPredef.png")) {
    copy($path . "PerfilPredef.png", $path . $id . ".png");
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
          <h4 class="mb-0"> USUARIOS </h4>
        </div>
        <div class="card-body">

        <form action="" method="post">
          NOMBRE: <input class="form-control" type="text" name="nombre"><br>
          CUENTA: <input class="form-control" type="text" name="cuenta"><br>
          PASSWORD: <input class="form-control" type="text" name="password"><br>
       NIVEL <select class="form-control"name="nivel"> 
        <option value="A" name="A">Admnistrador</option>
        <option value="O" name="O">Operador</option>
        <option value="V" name="V">Visualizador</option>
</select><br>
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
