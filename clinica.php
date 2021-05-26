<?php
    $aPacientes[]=array (
        "dni"=>"33.765.012",
        "nombre"=>"Ana Acuña",
        "edad"=>45,
        "peso"=>81.50
    );
    $aPacientes[]=array (
        "dni"=>"23.684.385",
        "nombre"=>"Gonzalo Bustamante",
        "edad"=>66,
        "peso"=>79
    );
    $aPacientes[]=array (
        "dni"=>"23.684.385",
        "nombre"=>"Juan Irraola",
        "edad"=>29,
        "peso"=>79
    );
    $aPacientes[]=array (
        "dni"=>"23.684.385",
        "nombre"=>"Beatriz Ocampo",
        "edad"=>50,
        "peso"=>79
    );

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Clinica Nutricion</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-align:center">
                <table class="table table-hover border">
                    <trhead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre y Apellido</th>
                            <th>Edad</th>
                            <th>Peso</th>
                        </tr>
                    </trhead>
                    <tbody>

                        <?php                      
                        foreach ($aPacientes as $aPaciente){
                        ?>

                        <tr>
                            <td><?php echo $aPaciente["dni"];?></td>
                            <td><?php echo $aPaciente["nombre"];?></td>
                            <td><?php echo $aPaciente["edad"];?></td>
                            <td><?php echo $aPaciente["peso"];?></td>
                            <?php
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>


            </div>


        </div>


    </main>
</body>

</html>