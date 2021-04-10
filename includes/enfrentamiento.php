<?php
    include('db.php');

    if (isset($_POST['type'])) {
        $tipo = $_POST['type'];
        switch ($tipo) {
            case 'oponente':
                $id = $_POST['id'];
                $query="SELECT idjugadores,nickname FROM personas WHERE idjugadores <> $id 
                AND estado = 'a' AND tipo_usuario=2";
                $result = mysqli_query($conexion,$query);
                if (!$result) {
                    die("Falla en la consulta " . mysqli_error());
                }
                $json = array();
                while ($row = mysqli_fetch_array($result)) {
                    $json[]=array(
                        'id' => $row['idjugadores'],
                        'nickname' => $row['nickname']
                    );
                }
                $jsonString = json_encode($json);
                echo $jsonString;
                break;
            
            case 'resultado':
                $query = "SELECT * FROM resultado_combate";
                $result = mysqli_query($conexion,$query);
                if (!$result) {
                    die("Falla en la consulta " . mysqli_error());
                }
                $json = array();
                while ($row = mysqli_fetch_array($result)) {
                    $json[]=array(
                        'id' => $row['id'],
                        'nombre' => $row['resultado']
                    );
                }
                $jsonString = json_encode($json);
                echo $jsonString;
                break;
            case 'enfrentamientos':
                $id = $_POST['id'];
                $query = "SELECT enfrentamientos.partida,jugadores.`nickname` AS jugador, personajes.`nombre` AS personaje,oponentes.`nickname` AS oponente,
                enfrentamientos.`ronda` AS ronda, enfrentamientos.`combates` AS combates, resultados.`resultado` AS resultado
                FROM enfrentamientos
                INNER JOIN personas AS jugadores ON enfrentamientos.`jugador` = jugadores.`idjugadores`
                INNER JOIN personajes ON enfrentamientos.`personaje` = personajes.`id`
                INNER JOIN personas AS oponentes ON enfrentamientos.`oponente` = oponentes.`idjugadores`
                INNER JOIN resultado_combate AS resultados ON enfrentamientos.`resultado` = resultados.`id`
                WHERE partida = $id";
                $result = mysqli_query($conexion,$query);
                if (!$result) {
                    die("Falla en la consulta " . mysqli_error());
                }
                $json = array();
                while ($row = mysqli_fetch_array($result)) {
                    $json[]=array(
                        'id' =>$row['id'],
                        'jugador' => $row['jugador'],
                        'personaje' => $row['personaje'],
                        'oponente' => $row['oponente'],
                        'ronda' => $row['ronda'],
                        'combates' => $row['combates'],
                        'resultado' => $row['resultado'],
                    );
                }
                $jsonString = json_encode($json);
                echo $jsonString;
                break;
            case 'busqueda':
                # code...
                break;
        }
    }
?>