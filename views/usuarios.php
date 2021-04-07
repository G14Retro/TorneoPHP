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
          <a class="nav-link" href="../views/torneos.php" id="torneos">Torneos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../views/usuarios.php" id="usuarios">Usuarios</a>
        </li>
      </ul>
    </div>
      <a class="nav-link" href="../views/login.php">Cerrar sesión</a>
  </div>
</nav>
<div class="container p-3">
<table class="table table-dark animate__fadeIn">
  <thead>
    <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Correo</th>
        <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody id="users">
  </tbody>
</table>
</div>

<div class="container">
<form id="userForm">
  <div class="form-row">
    <input type="hidden" id="idUsuario">
    <div class="form-group col-md-6">
      <label>Nombre</label>
      <input type="text" class="form-control" id="nombre">
    </div>
    <div class="form-group col-md-6">
      <label>Apellido</label>
      <input type="text" class="form-control" id="apellido">
    </div>
    <div class="form-group col-md-6">
      <label>Correo</label>
      <input type="mail" class="form-control" id="correo">
    </div>
    <div class="form-group col-md-6">
      <label>Estado</label>
      <label for="estado">Estado</label>
      <select class="form-control" id="estado">
        <option value="a">Activo</option>
        <option value="i">Inactivo</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="tipo_usuario">Tipo de usuario</label>
      <select class="form-control" id="tipo_usuario">
        <option value="1">Administrador</option>
        <option value="2">Jugador</option>
      </select>
    </div>
  </div>
  <div class="float-right">
    <button type="button" class="btn btn-outline-secondary" id="cancelarForm">Cancelar</button>
    <button type="submit" class="btn btn-success" id="guardarForm">Guardar</button>
  </div>
</form>
</div>

<script src="../js/user.js"></script>

<?php
    include_once('../recursos/footer.php');
?>