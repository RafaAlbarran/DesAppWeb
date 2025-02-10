<?php $titulo='admin' ?>
<?php require 'bloques/_config.php' ?>
<?php include_once 'bloques/_header.php' ?>
<!-- Formulario para recoger los datos de la cerveza-->
<form action="admin.php" method="get">
    <label>Nombre:<input type="text" name="nombre"></label>
    <label>Tipo:<input type="text" name="tipo"></label>
    <label>Alcohol:<input type="number" name="alcohol" step="0.01"></label>
    <label>Precio:<input type="number" name="precio" step="0.01"></label>
    <input  type="submit" value="Guardar cerveza">    
</form>
<?php
    // Cargar datos que recogemos de los inputs($_GET)
    $nombre = $_GET['nombre'];
    $tipo = $_GET['tipo'];
    $alcohol = $_GET['alcohol'];
    $precio = $_GET['precio'];
    echo $nombre;
    
    // Cargar datos del JSON y convertirlo en un array PHP
    $miArray = cargarJSON('assets/datos/cervezas.json');
    //debugPrint_r($miArray);

    // Añadir al array PHP los datos recogidos
    $miArray['cervezas'][] = array('nombre' => $nombre, 'tipo' => $tipo, 'alcohol' => $alcohol, 'precio' => $precio);
    //debugPrint_r($miArray);

    // Codificar el array PHP a JSON
    $miJSON = json_encode($miArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

    // Guardar JSON
    file_put_contents('assets/datos/cervezas.json', $miJSON);
?>
<?php include_once 'bloques/_footer.php' ?>