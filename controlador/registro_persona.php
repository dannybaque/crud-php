<?php
    if (!empty($_POST[btnregistrar])) {
        if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cedula"]) and !empty($_POST["fechanacimiento"]) and !empty($_POST["edad"])) {
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $cedula=$_POST["cedula"];
            $fechanacimiento=$_POST["fechanacimiento"];
            $edad=$_POST["edad"];

            $sql=$conexion->query("insert into persona (nombre,apellido,cedula,fecha_nacimiento,edad)values('$nombre','$apellido','$cedula','$fechanacimiento','$edad')" );
            if ($sql==1) {
                echo '<div class="alert alert-success">Persona registrado correctamente</div>';
            }else {
                echo '<div class="alert alert-danger">Error al registrar persona</div>';
            }

        }else{
            echo '<div class="alert alert-warning">Error al registrar persona</div>';
        }
    }
?>