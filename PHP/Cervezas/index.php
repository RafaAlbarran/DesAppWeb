<?php $titulo='Beerray' ?>
<?php require 'bloques/_config.php' ?>
<?php include_once 'bloques/_header.php' ?>

<?php


$rutaArchivo = 'assets/datos/cervezas.json';
debugPrint_r(cargarJSON($rutaArchivo));

echo '<ul>';

$miArray = cargarJSON($rutaArchivo);
foreach($miArray['cervezas'] as $miCerveza){
    echo "<li>
       <h2 class = 'nombre'>{$miCerveza['nombre']}</h2>
       <p class = 'tipo'>{$miCerveza['tipo']}</p>
       <p class = 'alcohol'>{$miCerveza['alcohol']}</p>
       <p class = 'precio'>{$miCerveza['precio']}</p>        
    </li>";
}
echo '</ul>';

?>
<?php include_once 'bloques/_footer.php' ?>