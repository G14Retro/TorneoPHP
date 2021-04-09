<?php
    include('db.php');
    $query = "SELECT idjugadores, nickname from personas WHERE tipo_usuario = 2 AND estado = 'a'";
    $result = mysqli_query($conexion,$query);
    if (!$result) {
        die ("Falla en la consulta " . mysqli_error());
    }
    $json = array();
    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'id' => $row['idjugadores'],
            'nickname' => $row['nickname']
        );
    }

    $jsonString = json_encode($json);
    echo  $jsonString;
?>