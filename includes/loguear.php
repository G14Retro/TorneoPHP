<?php
    
    include('../includes/db.php');  
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    
    if (isset($_POST['ingresar'])) {       
            $query = "SELECT * FROM personas where correo = '$correo' and clave = '$clave'";
            $resultado = $conexion->query($query);
            if ($resultado->num_rows >0) {
                while ($row = $resultado->fetch_assoc()) {
                    $estado = $row['estado'];
                    $tipo_usuario = $row['tipo_usuario'];
                }
                if ($estado == 'a') {
                    if ($tipo_usuario == 1 ) {
                        header('Location: ../views/admin.php');
                    }elseif ($tipo_usuario == 2) {
                        header('Location: ../views/home.php');
                    }
                }elseif ($estado == 'i') {
                    $_SESSION['mensaje'] = 'El usuario se encuentra inactivo';
                    $_SESSION['tipo_mensaje'] = 'warning';
                    header('Location: ../views/login.php');
                }
            }else {
                $_SESSION['mensaje'] = 'Error de autenticación verifique usuario y contraseña';
                $_SESSION['tipo_mensaje'] = 'danger';
                header('Location: ../views/login.php');
            }
    }

    if (isset($_POST['registrarse'])) {
        header('Location: ../views/registro.php');
    }
?>