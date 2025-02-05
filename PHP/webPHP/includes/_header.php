

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? echo $titulo?> - <? echo $datos['tituloSite']?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Esto es el header</h1>
        <!-- Llamamos a la funcion de php para construir el menu-->
         <?php constructorMenu();?>
    </header>
    <main>
        <h1><? echo $titulo; ?></h1>
   
