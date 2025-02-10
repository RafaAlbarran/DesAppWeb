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
        max-width: 600px;
        border-radius: 20px;
        margin: 0 auto;

    }

    a, p{
        display: inline;
        font-family: Tahoma;
        font-size: 12px;
    }

    li{
        font-family: Tahoma;
        font-size: 12px;
        margin-left: 10px;
    }

    h1{
        font-family: Tahoma;
        font-size: 20px;
        margin-left: 10px;
        text-align: center;
    }

    h2{
        font-family: Tahoma;
        font-size: 14px;
        margin-left: 10px;
    }

    li{
        list-style: none;
    }


</style>

</head>
<body>
    <h1>Listado de archivos</h1>


<?php 

$datos=[
    //Dia       Fecha           Nombre,              Ruta,                              Descripcion                 Visible/activo/inactivo
    ['Dia 1.',  '30/01/2025',   'Ciudad',           '/dia1/index.php',                  'Primeros pasos con PHP. Variables',    1],
    ['Dia 2.',  '31/01/2025',   'Includes',         '/dia2/index.php',                  'Uso de includes',                      1],
    ['Día 3.',  '03/02/2025',   'Variables',        '/dia3/variables/mivariable.php',   'Concatenación de variables y arrays',       1],
    ['Día 3.',  '03/02/2025',   'Alumnos',          '/dia3/alumnado/alumnos.php',       'Recorrer un array de alumnos y asignaturas',    1],    
    ['Día 3.',  '03/02/2025',   'JSON',             '/dia3/JSON/index.php',             'Cargar datos de un fichero JSON de películas',    1],
    ['Día 4.',  '04/02/2025',   'GET',              '/GET',                             'Uso de GET para utilizar datos de la URL',    1],
    ['Dia 5.',  '05/02/2025',   'Menu Web',         '/webPHP',                          'Crear las opciones de menú de una web de astronomía con código PHP',    1],
    ['Dia 6.',  '06/02/2025',   'Añadir a JSON',    '/JSON2/json2.php',                 'Añadir elementos a un fichero JSON de órganos del cuerpo humano',    1],
    ['Dia 6.',  '06/02/2025',   'Cine',             '/Cine/index.php',                  'Administrar películas de una cartelera de cine desde el menú Admin',    1],
    ['Dia 7.',  '07/02/2025',   'Restaurante',      '/Restaurante/index.php',           'Visualizar los elementos de un JSON que tiene platos, ingredientes y precios',    1],
    ['Dia 7.',  '07/02/2025',   'Restaurante 2',    '/Restaurante2/index.php',          'Visualizar los elementos de un JSON que tiene platos, ingredientes y precios',    0],
    ['Dia 8.',  '10/02/2025',   'Cervezas',         '/Cervezas/index.php',              'Página web de cervezas con bloques header y footer',    1]
];


echo "<h2>Fecha         Nombre      Descripción</h2>";
foreach($datos as $valor){
    if($valor[5]==1) {
        //echo '<li>Carpeta: <a href="'.$valor[3].'">'.$valor[2].'</li>';

        //echo "<li><a href='COSA.PHP' class='COSA' title='DESCRIPCION DEL APARTADO' target='_blank'>COSA</a></li>";
        //echo '<li>Fecha: <a href='COSA.PHP'>COSA</a></li>"
        
        echo "<li>{$valor[1]} <a href='{$valor[3]}'>{$valor[2]}</a><p> {$valor[4]}</p></li>";
        
    }
}

?>

</body>
</html>