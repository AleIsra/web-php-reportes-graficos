<?php
include('../../config/conexion.php');
include('../../config/verified.php');
include('../../layout/header.php');
?>

  <div class="row">
    <div class="col-md-6">
      <div class="card sin_margenes">
        <div id="cabeza" class="card-header bg-dark text-white">
          <h4 class="mb-0">Cambiar mi Contraseña</h4>
        </div>
        <div class="card-body">

          <?php if(isset($_GET['err'])){ ?>
            <div class="alert alert-danger">
              <?php
                if($_GET['err']=='actual'){ echo "La contraseña actual no es correcta."; }
                elseif($_GET['err']=='reglas'){ echo "La nueva contraseña no cumple con los requisitos de seguridad."; }
                elseif($_GET['err']=='coincide'){ echo "La nueva contraseña y la confirmacion no coinciden."; }
              ?>
            </div>
          <?php } ?>
          <?php if(isset($_GET['ok'])){ ?>
            <div class="alert alert-success">Contraseña actualizada correctamente.</div>
          <?php } ?>

          <form id="formCambiarPass" action="modules/perfil/cambiar_password_store.php" method="post" onsubmit="return validarClave()">

            CONTRASEÑA ACTUAL: <input class="form-control" type="password" name="password_actual" required><br>
            NUEVA CONTRASEÑA: <input class="form-control" type="password" id="nueva_password" name="nueva_password" oninput="chequearReglas()"><br>
            CONFIRMAR NUEVA CONTRASEÑA: <input class="form-control" type="password" id="confirmar_password" name="confirmar_password"><br>

            <ul class="small">
              <li id="r-len" class="text-danger">Mínimo 8 caracteres</li>
              <li id="r-letra" class="text-danger">Al menos una letra</li>
              <li id="r-num" class="text-danger">Al menos un número</li>
              <li id="r-esp" class="text-danger">Al menos un carácter especial (!@#$%...)</li>
            </ul>

            <div id="msgError" class="text-danger mb-2"></div>
            <input type="submit" class="btn btn-success" value="ACTUALIZAR CONTRASEÑA">
          </form>
        </div>
      </div>
    </div>
  </div>
<br>

<script>
function marcar(id, ok){
  const el = document.getElementById(id);
  el.classList.toggle('text-success', ok);
  el.classList.toggle('text-danger', !ok);
}

function chequearReglas(){
  const pass = document.getElementById('nueva_password').value;
  marcar('r-len', pass.length >= 8);
  marcar('r-letra', /[A-Za-z]/.test(pass));
  marcar('r-num', /[0-9]/.test(pass));
  marcar('r-esp', /[^A-Za-z0-9]/.test(pass));
}

function validarClave(){
  const pass = document.getElementById('nueva_password').value;
  const confirmar = document.getElementById('confirmar_password').value;
  const msg = document.getElementById('msgError');

  const reglasOk = pass.length >= 8 && /[A-Za-z]/.test(pass) && /[0-9]/.test(pass) && /[^A-Za-z0-9]/.test(pass);

  if(!reglasOk){
    msg.textContent = 'La nueva contraseña debe tener mínimo 8 caracteres, letras, números y un carácter especial.';
    return false;
  }
  if(pass !== confirmar){
    msg.textContent = 'La confirmación no coincide con la nueva contraseña.';
    return false;
  }
  return true;
}
</script>

</body>
</html>
<?php
include('../../layout/footer.php');
?>
