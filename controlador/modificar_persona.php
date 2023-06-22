<?php
    include "modelo/conexion.php";
    if (!empty($_POST["btnregistrar"])) {
        if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cedula"]) and !empty($_POST["fechanacimiento"]) and !empty($_POST["edad"])  ) {
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $cedula=$_POST['cedula'];
            $fechanacimiento=$_POST['fechanacimiento'];
            $edad=$_POST['edad'];
            $sql=$conexion->query(" update persona set nombre='$nombre', apellido='$apellido', cedula=$cedula, fecha_nacimiento='$fechanacimiento', edad=$edad where id=$id");
            if ($sql==1) {
                header("location:index.php");
            }else {
                echo '<div class="alert alert-danger">Error</div>';
            }
        }else {
            echo '<div class="alert alert-warning">Falta llenar campos</div>';
        }
    }
?>