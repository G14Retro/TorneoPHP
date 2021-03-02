<?php
    include('../includes/db.php');

if (isset($_POST['registrarse'])) {
    $tipo_documento = $_POST['tipo_documento'];
    $documento = $_POST['documento'];
    $nombre = strtolower($_POST['nombre']);
    $apellido = strtolower ($_POST['apellido']);
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $nickname = strtolower($_POST['nickname']);
    $correo = strtolower($_POST['correo']);
    $clave = $_POST['clave'];
    
    $query = "INSERT INTO personas(tipo_documento,num_documento,nombre,apellido,correo,nickname,fecha_nacimiento,clave,
    estado,tipo_usuario) VALUES 
    ('$tipo_documento','$documento','$nombre','$apellido','$correo','$nickname','$fecha_nacimiento','$clave','i',2)";

    $result = mysqli_query($conexion,$query);
    if (!$result) {
        echo $result;
       die("Fallo el query");
    }

    $_SESSION['mensaje'] = 'Se ha registrado satisfactoriamente';
    $_SESSION['tipo_mensaje'] = 'success';
    header('Location: ../views/login.php');
}

    if (isset($_POST['regresar'])) {
        header('Location: ../views/login.php');
    }
?>