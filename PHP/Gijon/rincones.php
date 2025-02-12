<?php $titulo='rincones' ?>
<?php require 'bloques/_config.php' ?>
<?php include_once 'bloques/_header.php' ?>

<h3>Pincha en la imagen para más información</h3>
<?php

$rutaArchivo = 'assets/datos/lugares.json';

// Cargar datos del JSON y convertirlo en un array PHP
$miArray = cargarJSON($rutaArchivo);
//debugPrint_r($miArray);

//recorrer el array
echo '<ul>';

foreach($miArray['rincones'] as $miRincon){
    echo "<li>
        <a href='detalles.php?id={$miRincon['imagen']}'>
        <img src='assets/img/{$miRincon['imagen']}' alt=''>
        </a>
    </li>";
}

echo '</ul>';
?>
<button><a href="index.php">Volver inicio</a></button>

<?php include_once 'bloques/_footer.php' ?>