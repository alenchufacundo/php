<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array("nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000
);
$aProductos[] = array("nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000,
);
$aProductos[] = array("nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000,
);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Listado de Productos</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Listado de productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <trhead>
                        <tr>
                            <td>Nombre</td>
                            <td>Marca</td>
                            <td>Modelo</td>
                            <td>Stock</td>
                            <td>Precio</td>
                            <td>Accion</td>
                        </tr>
                    </trhead>
                    <tbody>
                        <tr>
                            <td><?php echo $aProductos[0]["nombre"];?></td>
                            <td><?php echo $aProductos[0]["marca"];?></td>
                            <td><?php echo $aProductos[0]["modelo"];?></td>
                            <td><?php echo $aProductos[0]["stock"] <=0 ? "Hay poco stock" : ($aProductos[0]["stock"] == 0 ? "No hay stock" : "Hay stock");?>
                            </td>
                            <td>$ <?php echo $aProductos[0]["precio"];?></td>
                            <td><button class="btn-primary">Comprar</button></td>
                        </tr>
                        <tr>
                            <td><?php echo $aProductos[1]["nombre"];?></td>
                            <td><?php echo $aProductos[1]["marca"];?></td>
                            <td><?php echo $aProductos[1]["modelo"];?></td>
                            <td><?php echo $aProductos[1]["stock"] <=0 ? "Hay poco stock" : ($aProductos[1]["stock"] == 0 ? "No hay stock" : "Hay stock");?>
                            </td>
                            <td>$ <?php echo $aProductos[1]["precio"];?></td>
                            <td><button class="btn-primary">Comprar</button></td>
                        </tr>
                        <tr>
                            <td><?php echo $aProductos[2]["nombre"];?></td>
                            <td><?php echo $aProductos[2]["marca"];?></td>
                            <td><?php echo $aProductos[2]["modelo"];?></td>
                            <td><?php echo $aProductos[2]["stock"] <=0 ? "Hay poco stock" : ($aProductos[2]["stock"] == 0 ? "No hay stock" : "Hay stock");?>
                            </td>
                            <td>$ <?php echo $aProductos[2]["precio"];?></td>
                            <td><button class="btn-primary">Comprar</button></td>
                        </tr>
                        <tr>
                            <th colspan="4">Suma total</th>
                    <?php $var =0 ;
                    for ($contador=0; $contador < count($aProductos); $contador++){
                        $var +=$aProductos[$contador]["precio"];
                    }
                    ?>
                            <th><?php echo "Total $var pesos";?></th>
                        </tr>
                    </tbody>
                </table>
            </div>






    </main>

</body>

</html>