<?php
    include('../includes/db.php')
?>

<?php
    include('../recursos/header.php');
?>
<body id="bodyLogin">
<div class="modal-dialog text-center">

    <div class="contenedor-sesion">
      <h4 class="text-sesion">Inicio de Sesión</h4>
    </div>

    <div class="col-sm-9 main-section">
        <div class="modal-content">
          <img src="../img/login.jpg">
        </div>
        
        <div class="modal-content bg-transparent">         
          <form class="col-12" action="../includes/loguear.php" method="POST">
            <?php if (isset($_SESSION['mensaje'])) { ?>
              <div class="alert alert-<?= $_SESSION['tipo_mensaje']?>" role="alert">
              <?= $_SESSION['mensaje']?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
            <?php session_unset(); }  ?>
            <div class="input-group flex-nowrap">
              <div class="input-group-prepend">
                <span class="input-group-text" id="addon-wrapping"><i class="fas fa-envelope"></i></span>
              </div>
                <input type="mail" class="form-control" placeholder="Ingrese su correo" 
                aria-label="Ingrese su correo" name="correo" id="correo"
                aria-describedby="addon-wrapping" autofocus required>
            </div>
            <br>
            <div class="input-group flex-nowrap">
              <div class="input-group-prepend m-0">
                <span class="input-group-text" id="addon-wrapping"><i class="fas fa-lock"></i></span>
              </div>
                <input type="password" class="form-control" placeholder="Ingrese su Contraseña" 
                aria-label="Ingrese su Contraseña" name="clave" id="clave"
                aria-describedby="addon-wrapping" required>  
            </div>
            <br>

                <button type="submit" name="ingresar" class="btn btn-warning"><i class="fas fa-sign-in-alt"></i> Ingresar</button>
                <a class="btn btn-outline-warning" href="registro.php">Registrarse</a>

          </form>
        </div>
    </div>
</div>
<?php
    include('../recursos/footer.php');
?>


