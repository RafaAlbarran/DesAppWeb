<?php
//Conexión con la base de datos
$host = "localhost";
$user = "root";
$pass = "root";
$data = "rafa_club";

$conn = mysqli_connect($host, $user, $pass, $data);
//Revisar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}


    // captura los datos
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellidos'];
    $imagen = $_GET['imagen'];
    $fecha = $_GET['fecha'];
    $peso = $_GET['peso'];
    $estatura = $_GET['altura'];
    $categoria = $_GET['categoria'];

    //echo "Fecha: ".$fecha;
    //echo "Categoria: ".$categoria;

    //Construimos la query de SQL
    $sql = "INSERT INTO Socios (imagen, nombre_socio, apellidos_socio, fecha_nac, peso, altura, categoria) VALUES
('$imagen', '$nombre', '$apellido', '$fecha', $peso, $estatura, '$categoria')";
// $sql = "INSERT INTO Socios (imagen, nombre_socio, apellidos_socio, fecha_nac, peso, altura, categoria) VALUES
 //('qqqqq', 'eeeeee', 'rrrrrr', '2025-02-01', 23, 90, 'Alevín')";
 

//Hacemos la consulta de SQL
mysqli_query($conn, $sql);
echo "<h2>Datos insertados correctamente</h2>";

//Cerrar la conexión
mysqli_close($conn);

?>

<button><a href="index.php">Volver a Inicio</a></button>