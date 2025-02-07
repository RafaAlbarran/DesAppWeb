<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=º, initial-scale=1.0">
    <title>Cartelera</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>
    </header>

<?php

//crear una variable con el nombre del archivo JSON
$archivo='cartelera.json';

if(file_exists($archivo)){
    // Cargamos el Archivo JSON
    $miJSON = file_get_contents($archivo);

    //probamos para ver que lo hizo bien
    //echo $miJSON;

    // Decodificar JSON y convertirlo en un Array PHP
    $listaPeliculas = json_decode($miJSON,true);

    //probamos que todo haya ido bien
    // echo '<pre>';
    //     print_r($listaPeliculas);
    // echo '</pre>';


    // IMPRIMIMOS EL ARRAY  Mostramos los datos en una lista HTML
    echo '<ul>';
        foreach($listaPeliculas['peliculas'] as $peli){
            //echo "<li>{$peli['nombre']}</li>";

            //muestro el poster de la película, el título y la sala
            //algo asi 
                        // <li><div>
                        //     <img src=''>
                        //     <p>TITULO</P>
                        //     <P>SALA</p>
                        //     <a href='#' class='btn'>Sacar entradas</a>
                        // </div></li>
            echo "
                <li><div>
                    <img src='img/{$peli['poster']}' alt='Película {$peli['nombre']} dirigida por {$peli['director']} vela en el mejor cine de Gijón'>
                    <p>{$peli['nombre']}</P>
                    <P>{$peli['sala']}</p>
                    <a href='#' class='btn'>Sacar entradas</a>
                </div></li>";
        }
    echo '</ul>';
}
else {
    echo "Parece que el archivo $archivo no existe 😢";
}

?>

</body>
</html>