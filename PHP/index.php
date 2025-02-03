<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    
<style>
    html{
        background-color: tan;

    }

    body{
        background-color: white;
        max-width: 560px;
        border-radius: 20px;

    }

</style>

</head>
<body>
    <h1>Listado de archivos</h1>


<?php 

$datos=[
    // Nombre,      Ruta,                           Visible/activo/inactivo
    ['Dia 1',       '/dia1',                                 1],
    ['Variables',   'variables/mivariable.php',              1],
    ['JSON',       '/dia3/JSON/index.php',                   1],
    ['Dia 3',       '/dia2',                                 0],
    ['Dia 4',       '/dia2',                                 0],
    ['Dia 5',       '/dia2',                                 0],
    ['Dia 6',       '/dia2',                                 0],
    ['Dia 7',       '/dia2',                                 0],
    ['Dia 8',       '/dia2',                                 0]
];

/*
for($i=0;$i<count($datos)-1;$i++){
    if($datos[$i][2]){
         echo '<li><a href="'.$datos[$i][1].'">'.$datos[$i][0].'</li>';
    }
}
*/

foreach($datos as $valor){
    if($valor[2]) {
        echo '<li>Carpeta: <a href="'.$valor[1].'">'.$valor[0].'</li>';
    }
}

?>

</body>
</html>