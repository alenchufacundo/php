<?php

if($_POST){ /*esto quiere decir si es POSTBACK, es decir, si alguien hace click en el boton enviar*/
    print_r($_POST); /*IMPRIME LOS DATOS DEL SUBMIT DEL FORMULARIO*/
    print_r($_GET); /*IMPRIME LOS DATOS DE LA QUERY STRING*/
    print_r($_REQUEST); /*imprime tanto lo de get como lo de post*/

    $usuario = $_POST["txtUsuario"];
    $clave = $_POST["txtClave"];

    echo "El usuario $usuario ha ingresado correctamente";

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