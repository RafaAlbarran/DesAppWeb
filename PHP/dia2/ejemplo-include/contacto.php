<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Include para poner el menú de opciones de la cabecera-->
    <?php include 'includes/header.php' ?>    
    
    <main>
        <h2>Página de Contacto</h1>
        <img src="" alt="">
        <p>Ponte en contacto con nosotros para lo que necesites</p>
        <p>(bueno, no te pases...quizá no para todo) </p>
        <label for="correo">E-Mail: <input type="mail" id="correo"></label>
        <label for="mensaje">Tú mensaje aquí: <textarea id="mensaje"></textarea></label>
    </main>
    
    <!-- Include para poner el footer-->
    <?php include 'includes/footer.php' ?>
</body>
</html>