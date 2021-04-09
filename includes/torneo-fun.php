<?php
    include('db.php');
    if (isset($_POST['type'])) {
        $solicitud = $_POST['type'];

        switch ($solicitud) {
            case 'agregar':
                $nombre = $_POST['nombre'];
                $fecha = $_POST['fecha'];
                $query = "INSERT INTO partidas(nombre_evento,fecha_partida) VALUES('$nombre','$fecha')";
                $result = mysqli_query($conexion,$query);
                if (!$result) {
                    die ('Fallas en la consulta ' . mysqli_error());
                }
                echo "Se ha guardado satisfactoriamente";
                break;
            case 'buscar-id':
                $id = $_POST['id'];
                $query = "SELECT * FROM partidas WHERE idpartidas = $id";
                $result = mysqli_query($conexion,$query);
                if (!$result) {
                    die ('Fallas en la consulta ' . mysqli_error());
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
                break;
            case 'editar':
                $id = $_POST['id'];
                $nombre = $_POST['nombre'];
                $fecha = $_POST['fecha'];
                $query = "UPDATE partidas SET nombre_evento='$nombre',fecha_partida='$fecha' WHERE idpartidas=$id";
                $result = mysqli_query($conexion,$query);
                if (!$result) {
                    die ('Fallas en la consulta ' . mysqli_error());
                }
                echo "Registro actualizado correctamente";
                break;
        }
    }
?>