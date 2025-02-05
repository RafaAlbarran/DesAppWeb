<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{            
            background: red;           
            color: white;
        }

        h1{
            font-size: 100px;
            text-shadow: blue 12px 5px;           
        }
        
        a{
            color: white;           
        }


    </style>
</head>
<body>
    
<form action="index.php" method="get">
    <input type="text" name="nombre">
    <input type="submit">
</form>

    <?php 
        
    //En la url hay que poner esto: index.php?nombre=Rafa

    //comprobar si no se ha puesto nada en la url
    if(!isset($_GET['nombre'])){
        echo "<h2>Inserte un nombre para felicitar a alguien</h2>";
    }
    // si ya hemos insertado nombre:
    else
    {
        echo "<h1>Feliz Año: ".$_GET['nombre']."</h1>";
        echo "<a href='index.php'>Escribir otro nombre</a>";
    }
    
    ?>
   

</body>
</html>