<?php
    include('../includes/db.php');

    if ( isset($_POST['id'])) {
        $solicitud = $_POST['type'];
        switch ($solicitud) {
            case 'busqueda':
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
                break;
            case 'edit':
                $id = $_POST['id'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $correo = $_POST['correo'];
                $estado = $_POST['estado'];
                $tipo_usuario = $_POST['tipo_usuario'];
                $query = "UPDATE personas SET nombre='$nombre',apellido='$apellido',
                correo='$correo',estado='$estado',tipo_usuario=$tipo_usuario 
                WHERE idjugadores = $id";
                $result = mysqli_query($conexion,$query);
                if (!$result) {
                    die('Consulta fallida ' . mysqli_error($conexion));
                }
                echo "Se ha actualizado satisfactoriamente";
                break;
            }  
        
    }
?>