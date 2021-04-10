<?php
    include_once('../recursos/header.php');
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../views/admin.php">
    <img src="../img/Mortal_Kombat_Logo.svg.png" width="30" height="30" alt="">
    Torneo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../views/admin.php" id="inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../views/torneos.php" id="torneos">Torneos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../views/usuarios.php" id="usuarios">Usuarios</a>
        </li>
      </ul>
    </div>
      <a class="nav-link" href="../views/login.php">Cerrar sesión</a>
  </div>
</nav>

<body id="bodyRegistro">
    <div class="model-dialog">
        <div class="col-md-6 main-section mt-5">
            <div class=" modal-header bg-dark">
                <h2 class="informacion">Bienvenido Administrador</h2>
            </div>
        </div>
    </div>   
    
    <div class="contenedorAdmin  ">
      <form class="col-12 w-50 mr-md-3 ">
        <div class="botonesAdmin">
            <a class="btn btn-warning font-weight-bold " href="torneos.php">Torneo</a>
            <a class="btn btn-outline-secondary text-dark font-weight-bold" href="usuarios.php">Usuario</a>
        </div>
      </form>
    </div>
</body>
<?php
    include_once('../recursos/footer.php');
?>