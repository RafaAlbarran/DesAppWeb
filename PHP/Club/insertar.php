<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Inserción Socios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="entradaDatos"> 
<form action="_agregar_socio.php">
    <div class="fila">
        <label>Nombre: <input  type="text" name="nombre"></label>
    </div>
    <div class="fila">
        <label>Apellidos: <input  type="text" name="apellidos"></label>
    </div>
    <div class="fila">
        <label>Fecha nacimiento: <input  type="date" name="fecha"></label>
    </div>
    <div class="fila">
        <label>Fichero con su imagen: <input  type="text" name="imagen"></label>
    </div>
    <div class="fila">
        <label>Peso: <input  type="number" name="peso"></label>
    </div>
    <div class="fila">
        <label>Estatura: <input  type="number" name="altura"></label>
    </div>
    <div class="fila">
        <label>Categoria:</label>
        <select name="categoria" id="cat">
            <option value="Prebenjamín">Prebenjamín</option>
            <option value="Benjamín">Benjamín</option>
            <option value="Alevín">Alevín</option>
            <option value="Infantil">Infantil</option>
            <option value="Juvenil">Juvenil</option>
            <option value="Cadete">Cadete</option>
            <option value="Junior">Junior</option>
            <option value="Senior">Senior</option>
            <option value="Veterano">Veterano</option>
        </select>            
    </div>
    <input  type="submit" value="Guardar Socio">
</form>
</div>

</body>
</html>