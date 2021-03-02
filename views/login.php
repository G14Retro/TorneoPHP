<?php
    include('../includes/db.php')
?>

<?php
    include_once('../recursos/header.php');
?>
<body id="bodyLogin">
<div class="modal-dialog text-center">
    <div class="col-sm-9 main-section">
        <div class="modal-content">
          <img src="../img/login.jpg">
        </div>
        <div class="rounded-pill bg-primary">
          <h4 class="h4 text-white">Inicio de Sesión</h5>
        </div>
        <div class="modal-content bg-transparent">         
          <form class="col-12" action="../includes/loguear.php" method="POST">
            <?php if (isset($_SESSION['mensaje'])) { ?>
              <div class="alert alert-<?= $_SESSION['tipo_mensaje']?> alert-dismissible fade show" role="alert">
              <?= $_SESSION['mensaje']?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
            <?php session_unset(); }  ?>
            <div class="input-group flex-nowrap">
              <div class="input-group-prepend">
                <span class="input-group-text" id="addon-wrapping">Correo</span>
              </div>
                <input type="mail" class="form-control" placeholder="Ingrese su correo" 
                aria-label="Ingrese su correo" name="correo" id="correo"
                aria-describedby="addon-wrapping" autofocus>
            </div>
            <br>
            <div class="input-group flex-nowrap">
              <div class="input-group-prepend m-0">
                <span class="input-group-text" id="addon-wrapping">Contraseña</span>
              </div>
                <input type="password" class="form-control" placeholder="Ingrese su Contraseña" 
                aria-label="Ingrese su Contraseña" name="clave" id="clave"
                aria-describedby="addon-wrapping">  
            </div>
            <br>
                <button type="submit" name="ingresar" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Ingresar</button>
                <button type="submit" name="registrarse" class="btn btn-primary">Registrarse</button>
          </form>
        </div>
    </div>
</div>
</body>
<?php
    include_once('../recursos/footer.php');
?>