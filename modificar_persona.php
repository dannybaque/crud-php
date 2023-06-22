<?php
    include "modelo/conexion.php";
    $id=$_GET["id"];
    $sql=$conexion->query("select * from where id=$id")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST" >
        <h3 class="text-center text-secondary">Modificar registros</h3>
            <?php
            include "controlador/modificar_persona.php";
                while ($datos = $sql->fetch_object()) { ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Cedula</label>
                        <input type="number" class="form-control" name="cedula" value="<?= $datos->cedula ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="fechanacimiento" value="<?= $datos->fecha_nacimiento ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Edad</label>
                        <input type="number" class="form-control" name="edad" value="<?= $datos->edad ?>">
                    </div>
            <?php }
            ?>
    <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
    </form>
</body>
</html>