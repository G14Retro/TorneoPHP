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

<div class="container">
  <div class="row p-5">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <form id="form-torneo">
            <div class="form-group">
            <input type="hidden" id="id-partida">
              <div class="div">
                <label>Nombre de la partida</label></div>
              <div>
                <input type="text" id="partida" required></div>
              </div>
            <div class="form-group">
              <div>
                <label>Fecha del evento</label>
              </div>
              <div>
                <input type="datetime-local" id="partida-fecha" required>
              </div>
            </div>
            <button type="submit" class="btn btn-success" id="event-add">Guardar</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-8">
    <table class="table table-dark animate__fadeIn">
      <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre de la partida</th>
            <th scope="col">Fecha</th>
        </tr>
      </thead>
      <tbody id="partidas">
      </tbody>
    </table>
  </div>
  </div>
</div>
<script src="../js/torneo.js"></script>
<?php
    include_once('../recursos/footer.php');
?>