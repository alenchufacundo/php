<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(file_exists("archivo.txt")){
    //leer el json del archivo
    $jsonClientes = file_get_contents("archivo.txt");
    //convertir json a un array $aClientes
    $aClientes = json_decode($jsonClientes, true);

} else {
    //si no existe el archivo, se crea un array nuevo vacio de $aClientes.
    $aClientes = array();
}

$id = isset($_REQUEST["id"]) && $_REQUEST["id"] >= 0 ? $_REQUEST ["id"] : "";

if($_POST){
    $dni= $_REQUEST ["txtDni"];
    $nombre= $_REQUEST ["txtNombre"];
    $telefono= $_REQUEST ["txtTelefono"];
    $correo= $_REQUEST ["txtCorreo"];




if ($id != ""){

    if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
    $nombre = date ("Ymdhmsi") . rand (1000, 2000);
    $archivo_temp = $_FILES ["archivo"]["tmp_name"];
    $nombreArchivo = $_FILES ["archivo"]["name"];
    $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
    $nuevoNombre = "$nombreAleatorio.$extension";
    move_uploaded_file($archivo_temp, "imagenes/$nuevoNombre");
    }



    
    //actualizar cliente
    $aClientes[$id] = array(
        "dni" => $dni,
        "nombre" => $nombre,
        "telefono" => $telefono,
        "correo" => $correo,
        "imagen" => $nuevoNombre,
    );
} else {
    if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
        $nombreAleatorio = date("Ymdhmsi") . rand(1000, 5000);
        $archivo_tmp = $_FILES["archivo"]["tmp_name"];
        $nombreArchivo = $_FILES["archivo"]["name"];
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        $nuevoNombre = "$nombreAleatorio.$extension";
        move_uploaded_file($archivo_tmp, "imagenes/$nuevoNombre");
    }


    //Insertar el cliente nuevo
    $aClientes[] = array(
        "dni" => $dni,
        "nombre" => $nombre,
        "telefono" => $telefono,
        "correo" => $correo,
        "imagen" => $nuevoNombre,
    );
    
}


if ($id != "" && isset($_REQUEST["do"]) && $_REQUEST["do"] == "eliminar") {
    //Elimina el cliente del array
    unset($aClientes[$id]);
    //Actualizar el archivo con el nuevo array de aClientes
    $jsonClientes = json_encode($aClientes);
    file_put_contents("archivo.txt", $jsonClientes);
    header("Location: index.php");
}
//crear un array de datos
$aClientes [] = array("dni" => $dni, 
                        "nombre" => $nombre, 
                        "telefono" => $telefono, 
                        "correo" => $correo);

//convertir el array a json
$jsonClientes = json_encode($aClientes);

//guardar el json en un archivo llamado.txt
file_put_contents("archivo.txt", $jsonClientes);

header("Location: index.php");
}

?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">

    <title>ABM clientes</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 my-5 text-center">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <?php if (isset($msg) && $msg != ""): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $msg; ?>
                        </div>
                        <?php endif;?>
                        <div class="col-12 form-group">
                            <label for="txtDni">DNI: *</label>
                            <input type="text" id="txtDni" name="txtDni" class="form-control" required value="">
                        </div>
                        <div class="col-12 form-group">
                            <label for="txtNombre">Nombre: *</label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" required value="">
                        </div>
                        <div class="col-12 form-group">
                            <label for="txtTelefono">Teléfono:</label>
                            <input type="text" id="txtTelefono" name="txtTelefono" class="form-control" required
                                value="">
                        </div>
                        <div class="col-12 form-group">
                            <label for="txtCorreo">Correo: *</label>
                            <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" required value="">
                        </div>
                        <div class="col-12 form-group">
                            <label for="txtCorreo">Archivo adjunto:</label>
                            <input type="file" id="archivo" name="archivo" class="form-control-file"
                                accept=".jpg, .jpeg, .png">
                            <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-3">
                            <button type="submit" id="btnGuardar" name="btnGuardar"
                                class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <table class="table table-hover border">
                    <tr>
                        <th>Imagen</th>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                    <?php
                            foreach ($aClientes as $pos => $cliente): ?>
                    <tr>
                        <td><img class="img-thumbnail" src="imagenes/<?php echo $cliente["imagen"]; ?>" alt=""></td>
                        <td><?php echo $cliente["dni"]; ?></td>
                        <td><?php echo $cliente["nombre"]; ?></td>
                        <td><?php echo $cliente["correo"]; ?></td>
                        <td style="width: 110px;">
                            <a href="index.php?id=<?php echo $pos; ?>"><i class="fas fa-edit"></i></a>
                            <a href="index.php?id=<?php echo $pos; ?>&do=eliminar"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </table>
                <a href="index.php"><i class="fas fa-plus"></i></a>
            </div>
        </div>
    </main>
</body>

</html>