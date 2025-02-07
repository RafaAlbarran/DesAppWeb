<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            max-width: 550px;
            width: 350px;
            background-color: tan;
            margin: 0 auto;
            font-family: sans-serif;
        }       

        .contenedor{
            width: 300px;
            height: 300px;
            background-color: white;
            border-radius: 10px;
            display: flex;
            flex-direction: column; 
            gap: 5px;
            margin-bottom: 10px;
            border: 3px dotted red;
        }

        img{
            width: 150px;
            height: 200px;
            object-fit: cover;
            margin: 5px;
            box-shadow: 10px 5px 5px rgba(0, 0, 255, .2);                 
        }

        li{
            list-style: none;
        }

        .alerta{
            border: red 1 solid;
            padding: 20px;
            color: red;
            border-radius: 10px;
            margin: 10px;
            font-family: monospace;
        }

        .alerta strong{
            background: red;
            color: white;
        }

        p{
            margin: 0;
            text-align: center;
        }
        h2{
            margin: 0;
            font-size: 20px;
            font-style: italic;
        }
        .autor{
            font-size: 16px;
            font-weight: bold;
            color: orange;
        }
        .fecha{
            font-size: 12px;
        }
       

    </style>
</head>
<body>  

<?php
$construccion=true; 

$archivo='data.json'; //almacena el archivo a cargar
// verificamos si el archivo existe
if(file_exists($archivo)){
    $archivoJSON=file_get_contents($archivo); //cargamos el archivo
    $datos = json_decode($archivoJSON, true); //convierte el JSON en array de PHP
    
    if($construccion){
        //Ver si el array se ha creado correctamente y analizar su contenido
        echo '<pre>';
            print_r($datos);
        echo '</pre>';
    }

    echo "<ul>"; //creamos el ul
    //hacemos un bucle foreach para recorrer el array
    foreach($datos['data'] as $pelicula){
        echo "<li>";
            echo "<div class='contenedor'>";
            echo "<img src='img/{$pelicula['img']}'>";
            echo "<h2>{$pelicula['nombre']}</h2>";
            echo "<p class='autor'> {$pelicula['autor']}</p>";
            echo "<p class='fecha'> {$pelicula['fecha']}</p>";
            echo "</div>";
        echo "</li>";    
    }
    echo "</ul>";
} // fin de if
else {
    echo "<div class='alerta'>No se puede cargar el archivo <strong>".$archivo."</strong></div>";
}

?>

</body>
</html>