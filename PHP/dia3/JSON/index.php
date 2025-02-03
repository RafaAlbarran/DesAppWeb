<?php 

// Leemos el archivo JSON
$datos = json_decode(file_get_contents('data.json'), true);

//mirar la estructura de datos
echo '<pre>';
    print_r($datos);
echo '</pre>';

echo '<ul>'; //creamos el ul
//hacemos un bucle foreach para recorrer el array
foreach($datos['data'] as $pelicula){
    echo '<li>';
        echo "<img src='{$pelicula['imagen']}'>";
        echo "<h2>{$pelicula['titulo']}</h2>";
        echo "<p class='director'> {$pelicula['director']}</p>";
        echo "<p class='anio'> {$pelicula['anio']}</p>";
    echo '</li>';    
}
echo '</ul>';

?>