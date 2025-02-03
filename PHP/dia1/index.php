<?php 
$pueblos = 'Nuuk';
$descripcion = 'Esto es la descripcion puesta por PHP';
$imagen1 = 'https://picsum.photos/id/1/200/300';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groenlandia</title>
    <meta name="description" content="Descubre la historia de Groenlandia">
    <meta name="">

</head>
<body>
    <header>
    
    </header>
    <main>

<?php echo $pueblos; ?>

    <h1>Turismo en <?php echo $pueblos; ?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quia consequatur facilis voluptates,</p>
    <p>eligendi, sequi impedit odit sint fugiat enim veniam dicta. Maiores quidem, debitis deleniti velit eum ipsa dolores!</p>
    <p><?php echo $descripcion; ?></p>
    <p>Groenlandia es la mayor isla del planeta, objeto de deseo de las grandes potencias. Una de sus ciudaddes es <?php echo $pueblos; ?></p>
    <h2>Curiosidades de <?php echo $pueblos; ?></h2>

    <figure>
        <img src="https://picsum.photos/id/179/367/267" alt="Foto de playa con rocas">        
        <figcaption>Foto de <?php echo $pueblos; ?></figcaption>
    </figure>
    <img src="<?php echo $imagen1; ?>" alt="">
</main>
<footer>
    
    <p>&copy; Copyright - Groenlandia</p>
</footer>
</body>
</html>