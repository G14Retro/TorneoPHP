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

<div class="container bg-dark text-light">
    <div class="row">
        <div class="col-md-12">
            <form id="enfrentamiento-form" class="form-inline">
                <label class="my-1 mr-2" for="jugador">Jugador</label>
                    <select class="custom-select my-1 mr-sm-2" id="jugador">
                        <option>Seleccionar</option>
                    </select>
                <label class="my-1 mr-2" for="personaje">Personaje</label>
                    <select class="custom-select my-1 mr-sm-2" id="personaje">
                        <option>Seleccionar</option>
                    </select>
                <label class="my-1 mr-2" for="oponente">Oponente</label>
                    <select class="custom-select my-1 mr-sm-2" id="oponente">
                        <option>Seleccionar</option>
                    </select>
                <label class="my-1 mr-2" for="ronda">Ronda</label>
                    <input type="number" class="form-control mb-2 mr-sm-2" id="ronda" placeholder="Ingrese el número de ronda">
                <label class="my-1 mr-2" for="combate">Combates</label>
                    <input type="number" class="form-control mb-2 mr-sm-2" id="combate" placeholder="Ingrese el número de ronda">
                <label class="my-1 mr-2" for="resultado">Resultado</label>
                    <select class="custom-select my-1 mr-sm-2" id="resultado">
                        <option>Seleccionar</option>
                    </select> 
                <div>
                <button type="submit" class="btn btn-primary mb-2" id="guardar">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../js/enfrentamiento.js"></script>
<?php
    include_once('../recursos/footer.php');
?>