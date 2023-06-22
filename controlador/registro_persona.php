<?php
    if (!empty($_POST['btnregistrar'])) {
        if (!empty($_POST['nombre']) and 
        !empty($_POST['apellido']) and 
        !empty($_POST['cedula']) and 
        !empty($_POST['fechanacimiento']) and 
        !empty($_POST['edad'])) {
            
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $cedula=$_POST['cedula'];
            $fechanacimiento=$_POST['fechanacimiento'];
            $edad=$_POST['edad'];
            

            $sql = $conexion->query("INSERT INTO persona (nombre, apellido, cedula, fecha_nacimiento, edad) VALUES ('$nombre', '$apellido', '$cedula', '$fechanacimiento', '$edad')");

            if ($sql==1) {
                echo '<div>Persona registrado correctamente</div>';
            }else {
                echo '<div>Error al registrar persona</div>';
            }
        }else{
            echo '<div>Error al registrar persona</div>';
        }
    }
?>

