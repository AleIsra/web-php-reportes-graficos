<?php
include('config/conexion.php'); //conctado
//recibo las variables
//mysqli_real_escape_string sirve para evitar inyecciones
$cuenta= mysqli_real_escape_string($conexion,$_POST['cuenta']);
$password=mysqli_real_escape_string($conexion,$_POST['password']);
$password_=md5($password);
$token=md5(rand(0,100000)); 
$consulta="SELECT * FROM usuarios WHERE cuenta='{$cuenta}' AND password='{$password_}'";


//consulta
$resultado=mysqli_query($conexion,$consulta);
if(mysqli_num_rows($resultado)!=0){
    $_SESSION['cuenta']=$cuenta;
    $_SESSION['password']=$password_;
        #### crear el TOKEN ######
            
        $_SESSION["token"] = $token;
        // aca obtengo el ID del usuario logueado exitosamente
        $dato=mysqli_fetch_array($resultado); //aca obtengo el id
        $id=$dato['id'];
        //aca actualizo su token del usuario logueado exitosamente
        $consulta="UPDATE usuarios SET token='".$token."' WHERE id='".$id."' ";
        mysqli_query($conexion,$consulta);


    ####### usar cokkies ####
    $recordar=$_POST['recordar'] ?? 0;
    if($recordar=='1'){
    setcookie("recordar", '1', time()+500);
    setcookie("user_", $cuenta, time()+500);
    setcookie("pasw_", $_POST['password'], time()+500);
    }
    else{
    setcookie("recordar", '0');
    setcookie("user_", '');
    setcookie("pasw_", '');
    }

    header("Location: modules/home/index.php");
}
else {
    header("Location: index.php?sw=1");
}
?>