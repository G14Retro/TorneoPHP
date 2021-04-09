<?php
    include('db.php');
    $query = "SELECT * FROM personajes ORDER BY nombre ASC";
    $result = mysqli_query($conexion,$query);
    if (!$result) {
        die ("Falla en la consulta " . mysqli_error());
    }
    $json = array();
    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'id' => $row['id'],
            'nombre' => $row['nombre']
        );
    }

    $jsonString = json_encode($json);
    echo  $jsonString;
?>