<?php
    include('db.php');
    $query = "SELECT * FROM partidas";
    $result = mysqli_query($conexion,$query);

    if (!$result) {
        die('Fallo de consulta ' . mysqli_error($conexion));
    }

    $json = array();
    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'id' => $row['idpartidas'],
            'nombre' => $row['nombre_evento'],
            'fecha' => $row['fecha_partida']
        );
    }
    $jsonString = json_encode($json);

    echo $jsonString;
?>