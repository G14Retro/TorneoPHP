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


<div class="container text-light">
    
    <div class="row p-5">
        <div class="col-md-5 bg-dark">
            <form id="enfrentamiento-form" class="form-col ">
            <h3>Información del enfrentamiento</h3>
            <input type="hidden" id="enfrentamientoId">
            <div>
                <label class="my-1 mr-2" for="jugador">Jugador</label>
                    <select class="custom-select my-1 mr-sm-2" id="jugador">
                        <option>Seleccionar</option>
                    </select>
            </div>
                <label class="my-1 mr-2" for="personaje">Personaje</label>
                    <select class="custom-select my-1 mr-sm-2" id="personaje">
                        <option>Seleccionar</option>
                </select>
            <div>
            </div>
            <div>
                <label class="my-1 mr-2" for="oponente">Oponente</label>
                    <select class="custom-select my-1 mr-sm-2" id="oponente">
                        <option>Seleccionar</option>
                    </select>
            </div>
            <div>
                <label class="my-1 mr-2" for="ronda">Ronda</label>
                    <input type="number" class="form-control mb-2 mr-sm-2" id="ronda" placeholder="Ingrese el número de ronda">
            </div>
            <div>
                <label class="my-1 mr-2" for="combate">Combates</label>
                    <input type="number" class="form-control mb-2 mr-sm-2" id="combate" placeholder="Ingrese el número de ronda">
            </div>
            <div>
                <label class="my-1 mr-2" for="resultado">Resultado</label>
                    <select class="custom-select my-1 mr-sm-2" id="resultado">
                        <option>Seleccionar</option>
                    </select> 
            </div>
                <div class="float-right">
                <button type="submit" class="btn btn-warning m-md-3" id="guardar">Guardar</button>
                <a class="btn btn-outline-warning font-weight-bold m-md-3" href="torneos.php">Regresar</a>
                </div>
            </form>
        </div>
        <div class="col-md-7 m-t-1">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Jugador</th>
                    <th scope="col">Personaje</th>
                    <th scope="col">Oponente</th>
                    <th scope="col">Ronda</th>
                    <th scope="col">Combate</th>
                    <th scope="col">Resultado</th>
                </tr>
            </thead>
            <tbody id="partidas">
            </tbody>
            </table>
        </div>
    </div>
</div>

<footer class="text-center text-white" style="background-color: #f1f1f1;">
<!-- Grid container -->
<div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">

    <!-- Facebook -->
    <a class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

    <!-- Twitter -->
    <a class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

    <!-- Google -->
    <a class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

    <!-- Instagram -->
    <a class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

    <!-- Linkedin -->
    <a class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>

    <!-- Github -->
    <a class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
    </section>

    <!-- Section: Social media -->
</div>
<!-- Grid container -->

<!-- Copyright -->
<div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-light bg-warning font-weight-bolb" href="https://www.youtube.com/watch?v=b-dfaJ1plvk">Mortal Kombat – Trailer Oficial</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->
<script src="../js/enfrentamiento.js"></script>
<?php
    include_once('../recursos/footer.php');
?>