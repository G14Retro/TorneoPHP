<?php
    include('../includes/db.php');
    $query = "SELECT * FROM personas";

    $result = mysqli_query($conexion,$query);

    if (!$result) {
        die('Consulta fallida ' . mysqli_error($conexion));
    }

    $json = array();

    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'nombre' => $row['nombre'],
            'apellido' => $row['apellido'],
            'correo' => $row['correo'],
            'estado' => $row['estado']
        );
    }
    $jsonString = json_encode($json);
    echo $jsonString;
?>