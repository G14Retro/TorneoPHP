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
          <a class="nav-link" aria-current="page" href="../views/admin.php" id="inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../views/torneos.php" id="torneos">Torneos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../views/usuarios.php" id="usuarios">Usuarios</a>
        </li>
      </ul>
    </div>
      <a class="nav-link" href="../views/login.php">Cerrar sesión</a>
  </div>
</nav>
<h1>Hola Torneo</h1>

<?php
    include_once('../recursos/footer.php');
?>