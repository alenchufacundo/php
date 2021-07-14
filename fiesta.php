<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aInvitados = array("pepe", "ana", "maca", "juan");
$mensaje = array("bienvid@ a la fiesta", "no se encuentra en la lista de invitados", "aqui tiene su pulsera", "usted no tiene pase vip");
$estado = array("success", "danger");
$aColor= array ("verde");

if ($_POST["boton"] == "invitado") { 

    $usuario = $_REQUEST["usuario"];
    $clave = $_REQUEST["clave"];

    if($usuario == in_array($usuario, $aInvitados)){
        echo $mensaje [0];
    }
    else{
        echo $mensaje [1];
    }

}
if ($_POST["boton"] == "proVIP") { 
    $usuario = $_REQUEST["usuario"];
    $clave = $_REQUEST["clave"];

    if(in_array($clave, $aColor)){
        echo $mensaje [2];
    }
    else{
        echo $mensaje [3];
    }
}

print_r ($_POST)

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Fiestita</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
            <?php  if (isset($mensaje) && $mensaje != $mensaje){
                echo '<div class="alert alert-danger" role="alert">' . $mensaje  . "</div>";
            }
        ?>
                <div class="col-12">
                    <h1>La fiesta</h1>
                    <p>Completa el siguiente formulario</p>
                </div>
            </div>
            <form class="form-control" method="POST">
                <div class="row">               
                    <div class="col-12">
                        <label for="">Nombre:</label>
                        <input type="text" name="usuario" id="usuario" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="co-12">
                        <button type="submit" value="invitado" name="boton" id="boton"
                            class="btn btn-primary">Procesar
                            invitado</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="">Ingresa el codigo secreto para el pase VIP:</label>
                        <input type="text" name="clave" id="clave" class="form-control">
                    </div>
                </div>
                <div>
                    <button value="proVIP" type="submit" name="boton" id="boton" class="btn btn-primary">Procesar
                        VIP</button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>