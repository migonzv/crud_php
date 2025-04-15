<?php

include "modelo/conexion.php";

$id = $_GET["id"];

$sql = $conexion->query(" select * from persona where id_persona=$id ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
            <h5 class="text-center alert alert-secondary">Modificar Personas</h5>
            <?php
            include "controlador/modificar_persona.php";
            while ($datos = $sql->fetch_object()) { ?>
            
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                    <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
                    <input type="text" class="form-control" name="apellido"value="<?= $datos->apellido ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
                    <input type="text" class="form-control" name="dni"value="<?= $datos->dni ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fecha"value="<?= $datos->fecha ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="correo"value="<?= $datos->correo ?>">
                </div>
            
            <?php }

            ?>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
            </form>
</body>
</html>