<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    if ($_POST){ //si alguien clickea en enviar

        $usuario = $_REQUEST["txtUsuario"];
        $clave= $_REQUEST["txtClave"];

        if($usuario != "" && $clave != ""){ //Si $usuario y $clave es distinto de vacio entonces:
            header("Location: acceso-confirmado.php");
        } else {
            $mensaje = "Válido para usuarios registrados";
        }
    }

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Formulario</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <?php  if (isset($mensaje) && $mensaje != ""){
                echo '<div class="alert alert-danger" role="alert">' . $mensaje . "</div>";
            }
        ?>
            <div class="col-12">
                <form action="" method="POST">
                    <div>
                        <label for="">Usuario: <input type="text" name="txtUsuario" id="txtUsuario"
                                class="form-control"></label>
                    </div>
                    <div>
                        <label for="">Clave: <input type="password" name="txtClave" id="txtClave"
                                class="form-control"></label>
                    </div>
                    <div>
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>