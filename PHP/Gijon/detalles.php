<?php $titulo='detalles' ?>
<?php require 'bloques/_config.php' ?>
<?php include_once 'bloques/_header.php' ?>

<?php
$rutaArchivo = 'assets/datos/lugares.json';

// Cargar datos del JSON y convertirlo en un array PHP
$miArray = cargarJSON($rutaArchivo);

//recorrer el array
foreach($miArray['rincones'] as $miRincon){

    //mostrar solo la información del elemento sobre el que se ha hecho click
    if($_GET['id'] == $miRincon['imagen']){
        echo "
            <img src='assets/img/{$miRincon['imagen']}' alt=''>
            <h3>{$miRincon['nombre']}</h3>
            <p>{$miRincon['descripcion']}</p>
            ";
    }
}
?>
<button><a href="rincones.php">Volver</a></button>
<?php include_once 'bloques/_footer.php' ?>