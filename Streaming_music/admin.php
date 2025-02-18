<?php require 'bloques/_config.php' ?>
<?php include_once 'bloques/_header.php' ?>

<h3>Introducir nuevos datos</h3>
<form action="admin.php" method="get">
    <fieldset>
        <label>URL de la imagen: <input type="text" name="imagen"></label>
        <label>Nombre del intérprete: <input type="text" name="nombre"></label>
        <label>Título de la canción: <input name="titulo"></label>
        <label>URL del video: <input type="text" name="video"></label>
        <input type="submit" value="Guardar" id="enviar">
    </fieldset>
</form>

<?php
    // Cargar datos que recogemos de los inputs($_GET)
    if(isset($_GET['imagen']) && isset($_GET['nombre']) && isset($_GET['titulo']) && isset($_GET['video']) ){
        $imagen = $_GET['imagen'];
        $nombre = $_GET['nombre'];    
        $titulo = $_GET['titulo'];
        $video = $_GET['video'];      
    
        // sanitización
        if($nombre !== strip_tags($nombre)){
            // convierto el contenido
            $nombre = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');        
        }

        if($titulo !== strip_tags($titulo)){
            // convierto el contenido
            $titulo = htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8');        
        }

        if($imagen !== strip_tags($imagen)){
            // convierto el contenido
            $imagen = htmlspecialchars($imagen, ENT_QUOTES, 'UTF-8');        
        }

        if($video !== strip_tags($video)){
            // convierto el contenido
            $video = htmlspecialchars($video, ENT_QUOTES, 'UTF-8');        
        }

    
        // Cargar datos del JSON y convertirlo en un array PHP
        $miArray = cargarJSON('assets/datos/data.json');
        
        //para poner el indice, miro cuantos elementos hay en el array
        $numItems = count($miArray['canciones']);
        $id = $numItems+1;

        // Añadir al array PHP los datos recogidos
        $miArray['canciones'][] = array('id' => $id, 'interprete' => $nombre, 'titulo' => $titulo, 'imagen' => $imagen, 'url' => $video);

        // Codificar el array PHP a JSON
        $miJSON = json_encode($miArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        // Guardar JSON
        file_put_contents('assets/datos/data.json', $miJSON);
    }

?>
<button><a href="index.php">Volver inicio</a></button>

<?php include_once 'bloques/_footer.php' ?>
