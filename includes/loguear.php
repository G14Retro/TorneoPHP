<?php
    
    include('../includes/db.php');  
    
    if (isset($_POST['ingresar'])) {       
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];
            $query = "SELECT * FROM personas where correo = '$correo' and clave = '$clave'";
            $nrow = mysqli_num_rows(mysqli_query($conexion,$query));
            if ($nrow==1) {
                header('Location: ../views/home.php');
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