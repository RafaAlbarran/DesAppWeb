<?php require 'bloques/_config.php' ?>
<?php include_once 'bloques/_header.php' ?>

<?php
$rutaArchivo = 'assets/datos/data.json';

// Cargar datos del JSON y convertirlo en un array PHP
$miArray = cargarJSON($rutaArchivo);

//recorrer el array
foreach($miArray['canciones'] as $cancion){

    //mostrar solo la información del elemento sobre el que se ha hecho click
    if($_GET['id'] == $cancion['id']){
        echo "
            <img src='{$cancion['imagen']}' alt=''>
            <h4>{$cancion['interprete']} - {$cancion['titulo']}</h4>
            <iframe src='{$cancion['url']}' title='{$cancion['interprete']} {$cancion['titulo']}'></iframe>
            ";
        break;
    }
}

?>

<button><a href="index.php">Volver inicio</a></button>

<?php include_once 'bloques/_footer.php' ?>