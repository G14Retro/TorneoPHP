<?php
    include('../includes/db.php');

    if (isset($_POST['id'])) {
       $id = $_POST['id'];
       $query = "SELECT * FROM personas WHERE idjugadores = $id";
       $result = mysqli_query($conexion,$query);
       if (!$result) {
           die('Consulta fallida ' . mysqli_error($conexion));
       }
       $json = array();

       while ($row = mysqli_fetch_array($result)) {
           $json[] = array(
            'id' => $row['idjugadores'],
            'nombre' => $row['nombre'],
            'apellido' => $row['apellido'],
            'correo' => $row['correo'],
            'estado' => $row['estado'],
            'tipo_usuario' => $row['tipo_usuario']
           );
       }
       $jsonString = json_encode($json);
       echo $jsonString;
    }

?>