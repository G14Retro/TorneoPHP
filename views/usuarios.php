<?php
    include('../recursos/header.php');
?>
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
<?php
    include_once('../recursos/footer.php');
?>