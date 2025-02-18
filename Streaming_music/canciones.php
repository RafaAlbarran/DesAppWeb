<?php require 'bloques/_config.php' ?>
<?php include_once 'bloques/_header.php' ?>

<h3>Pincha en la imagen escuchar la canción</h3>
<?php

$rutaArchivo = 'assets/datos/data.json';

// Cargar datos del JSON y convertirlo en un array PHP
$miArray = cargarJSON($rutaArchivo);
//debugPrint_r($miArray);

//recorrer el array
echo '<ul>';

foreach($miArray['canciones'] as $cancion){
    echo "<li>
        <a href='reproducir.php?id={$cancion['id']}'>
        <img src='{$cancion['imagen']}' alt=''>
        </a>
        <h4>{$cancion['interprete']} - {$cancion['titulo']}</h4>
    </li>";
}

echo '</ul>';
?>
<button><a href="index.php">Volver inicio</a></button>

<?php include_once 'bloques/_footer.php' ?>