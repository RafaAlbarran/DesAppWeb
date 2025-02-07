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
    //Dia       Fecha           Nombre,              Ruta,                           Visible/activo/inactivo
    ['Dia 1.',  '30/01/2025',   'Ciudad',           '/dia1/index.php',                      1],
    ['Dia 2.',  '31/01/2025',   'Includes',         '/dia2/index.php',                      1],
    ['Día 3.',  '03/02/2025',   'Variables',        '/dia3/variables/mivariable.php',       1],
    ['Día 3.',  '03/02/2025',   'Alumnos',          '/dia3/alumnado/alumnos.php',           1],    
    ['Día 3.',  '03/02/2025',   'JSON',             '/dia3/JSON/index.php',                 1],
    ['Día 4.',  '04/02/2025',   'GET',              '/GET',                                 1],
    ['Dia 5.',  '05/02/2025',   'Menu Web',         '/webPHP',                              1],
    ['Dia 6.',  '06/01/2025',   'Añadir a JSON',    '/JSON2/json2.php',                     1],
    ['Dia 7.',  '06/01/2025',   'Cine',             '/Cine/index.php',                      1],
    ['Dia 8.',   '',            '',                 '',                                     0],
    ['Dia 9.',   '',            '',                 '',                                     0]
];

/*
for($i=0;$i<count($datos)-1;$i++){
    if($datos[$i][2]){
         echo '<li><a href="'.$datos[$i][1].'">'.$datos[$i][0].'</li>';
    }
}
*/

foreach($datos as $valor){
    if($valor[4]==1) {
        //echo '<li>Carpeta: <a href="'.$valor[3].'">'.$valor[2].'</li>';

        //echo "<li><a href='COSA.PHP' class='COSA' title='DESCRIPCION DEL APARTADO' target='_blank'>COSA</a></li>";
        //echo '<li>Fecha: <a href='COSA.PHP'>COSA</a></li>"
        
        echo "<li>{$valor[1]} <a href='{$valor[3]}'>{$valor[2]}</a></li>";
        
    }
}

?>

</body>
</html>