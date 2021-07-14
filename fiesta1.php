<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aInvitados = array("pepe", "ana", "maca", "juan");
$mensaje1 = "";
$mensaje2 = "";
$estado = "";
$aColor= "verde";

//carga la variable con las imagenes de tu carpeta
$aImagenes = scandir("imagenes");
unset ($aImagenes[0]);
unset ($aImagenes[1]);

if ($_POST["boton"] == "invitado") { 

    $usuario = $_REQUEST["usuario"];
    $clave = $_REQUEST["clave"];

    //si viene la imagen
    if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) { //este if nos dice si se subio o no una imagen
        $nombreAleatorio = date("Ymdhmsi") . rand(1000, 5000);
        $archivo_tmp = $_FILES["archivo"]["tmp_name"];
        $nombreArchivo = $_FILES["archivo"]["name"];
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        $nuevoNombre = "$nombreAleatorio.$extension";
        move_uploaded_file($archivo_tmp, "imagenes/$nuevoNombre");
    }

    if($clave == "" && in_array($usuario, $aInvitados)){
        $mensaje1 = "Bienvenido a la fiesta";
        $estado = "success";
    }
    else{
        $mensaje1 = "No se encuentra  a la lista de invitados";
        $estado = "danger";
    }
}

if ($_POST["boton"] == "proVIP") { 
    $usuario = $_REQUEST["usuario"];
    $clave = $_REQUEST["clave"];

    if($clave == $aColor){
        $mensaje2 = "Aqui tiene su pulsera";
        $estado = "success";
    }
    else{
        $mensaje2 = "Usted no tiene el pase vip";
        $estado = "danger";
    }
}


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
        <div class="container mt-2">
            <div class="row">
                <?php  if ($mensaje1 != ""){
                echo "<div class='alert alert-$estado' role='alert'>
                $mensaje1</div>";
            }
                if ($mensaje2 != ""){
                echo "<div class='alert alert-$estado' role='alert'>
                $mensaje2</div>";
            }
        ?>
                <div class="col-12">
                    <h1>La fiesta</h1>
                    <p>Completa el siguiente formulario</p>
                </div>
            </div>
            <div class="row">
            <form method="POST">
                    <div class="col-12 pt-2 pb-2">
                        <label for="">Nombre:</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" style="width:150px">
                        <input type="file" name="fileimagen" id="fileimagen">
                    </div>
                    <div class="col-12 pt-3 pb-2">
                        <button type="submit" value="invitado" name="boton" id="boton" class="btn btn-primary">Procesar
                            invitado</button>
                    </div>
                    <div class="col-12 pt-2 pb-2">
                        <label for="">Ingresa el codigo secreto para el pase VIP:</label>
                        <input type="text" name="clave" id="clave" class="form-control" style="width:150px">
                    </div>
                <div class="pt-2 pb-2">
                    <button value="proVIP" type="submit" name="boton" id="boton" class="btn btn-primary">Procesar
                        VIP</button>
                </div>
                </div>
            </form>
        </div>
        <div class="col-6">
            <table class="table table-hover border">
                <tr>
                    <th>Imagen</th>
                </tr>          
            </table>
        
        </div>
    </main>

</body>

</html>