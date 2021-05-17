<?php
$fecha=date("d/m/Y");
$edad=24;
$nombre="Facundo Rios";
$aPeliculas=array("Volver al futuro","Que te importa","Titanic")
?>


<!DOCTYPE html>
<html lang="ee">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Ficha personal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tbody>
                        <tr>
                            <th>Fecha</th>
                            <td>
                                <?php echo $fecha ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Nombre y Apellido</th>
                            <td>
                                <?php echo $nombre ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Fecha</th>
                            <td>
                                <?php echo $edad?>
                            </td>
                        </tr>
                        <tr>
                            <th>Pelicula favorita</th>
                            <td>
                                <?php echo $aPeliculas [0]; ?><br>
                                <?php echo $aPeliculas [1]; ?><br>
                                <?php echo $aPeliculas[2]; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>

</body>

</html>