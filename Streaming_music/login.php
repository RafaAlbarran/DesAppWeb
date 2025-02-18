<?php require 'bloques/_config.php' ?>
<?php include_once 'bloques/_header.php' ?>

<?php

//definimos usuario y contraseña válidas
$usuarioCorrecto = 'rafa';
$passwordCorrecto = '1234';

//comprobamos si el formulario ha sido rellenado (via POST)
if(isset($_POST['usuario']) && isset($_POST['clave'])){
    //guardamos los datos introducidos por el usuario
    $usuarioIngresado = $_POST['usuario'];
    $passwordIngresado = $_POST['clave'];

    //Mostramos esos datps
    //echo "El usuario es: $usuarioIngresado <br>";
    //echo "La contraseña es: $passwordIngresado <br>";

    //Comprobamos si el usuario y la contraseña son correctas
    if($usuarioCorrecto==$usuarioIngresado && $passwordCorrecto==$passwordIngresado){
        //recargamos el web admin.php
        header ('Location: admin.php');
        //include 'bloques/_admin.php';
    }
    else {
        echo "<div>Las credenciales son incorrectas <a href='login.php'>Volver a intentar</a></div>";
    }
}
else {

?>
<form action="login.php" method="post">
    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" id="usuario">

    <label for="clave">Contraseña:</label>
    <input type="password" name="clave" id="clave">

    <input type="submit" value="Acceder">
</form>


<?php
}


?>





<?php include_once 'bloques/_footer.php' ?>