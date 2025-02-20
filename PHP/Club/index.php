<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLUB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <h1>Listado de Socios del club</h1>
        <button><a href="insertar.php">Añadir Socio</a></button>
        <button><a href="modificar.php">Modificar Socio</a></button>
        <button><a href="eliminar.php">Eliminar Socio</a></button>
    </div>
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

//Desplegar datos. Consulta SQL
$sql = "SELECT * FROM socios";

//Recoger resultados de la consulta en un array
$resultado_array = mysqli_query($conn, $sql);

//Recorremos bucle para mostrar datos
if (mysqli_num_rows($resultado_array) > 0) {
    echo "<ul class='flex'>";
    while($row = mysqli_fetch_assoc($resultado_array)) {
        echo "<div class='ficha'>";
            echo "<li> <img src='img/{$row['imagen']}'><br>";
            echo "<p>{$row['nombre_socio']} </p>";
            echo "<p>{$row['apellidos_socio']}</p><br>";
            echo "<div class='otros'>";
                echo "<p>{$row['fecha_nac']}</p><br>";
                echo "<label>Peso: <p>{$row['peso']}</p> kg</label><br>";
                echo "<label>Altura: <p>{$row['altura']}</p> cm</label></li>";
            echo "</div>";
        echo "</div>";
    }
    echo "</ul>";
  } else {
    echo "No hay socios en la base de datos.";
  }

  mysqli_close($conn);
?>
   
</body>
</html>