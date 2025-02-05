<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Soy GET</h1>

    <?php 
    
    //En la url hay que poner esto: index.php?nombre=Rafa

    echo "hola ".$_GET['nombre'];
    //otra forma: echo "hola {$_GET['nombre']}";
    
    //con dos parametros seria: index.php?nombre=Rafa&frikada=Cine
    echo "hola ".$_GET['nombre']." eres friki de: ".$_GET['frikada'];
    ?>
   

</body>
</html>