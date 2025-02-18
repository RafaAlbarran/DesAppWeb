<?php require 'bloques/_config.php' ?>
<?php include_once 'bloques/_header.php' ?>

    <h2>Contacta con nosotros</h2>
    <p>Envianos un correo si estás buscando alguna canción</p>
    <form action="" method="get">
        <label for="">Correo: 
            <input type="mail" placeholder="Aquí tu correo electrónico">
        </label>
        <label for="">Tú mensaje:
            <textarea name="texto" id="txtArea" rows="8" cols="15"></textarea>
        </label>
        <input type="submit" name="Enviar">
    </form>
    

  
<?php include_once 'bloques/_footer.php' ?>