<?php
include("conexion.php");

if(isset($_POST['guardar'])){

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $id_categoria = $_POST['id_categoria'];

    $sql = "INSERT INTO productos(nombre,precio,stock,id_categoria)
            VALUES('$nombre','$precio','$stock','$id_categoria')";

    if(mysqli_query($conexion,$sql)){
        $mensaje = "Producto registrado correctamente.";
    }else{
        $mensaje = "Error al registrar el producto.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Producto</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<header>
    <h1>Tienda de Ropa</h1>
</header>

<nav>
    <a href="index.php">Inicio</a>
    <a href="insertar.php">Insertar</a>
    <a href="consultar.php">Consultar</a>
    <a href="modificar.php">Modificar</a>
    <a href="eliminar.php">Eliminar</a>
</nav>

<h2>Registrar Producto</h2>

<?php
if(isset($mensaje)){
    echo "<p>$mensaje</p>";
}
?>

<form method="POST" id="formInsertar">

<label>Nombre del producto</label><br>
<input type="text" name="nombre" id="nombre"><br><br>

<label>Precio</label><br>
<input type="number" step="0.01" name="precio" id="precio"><br><br>

<label>Stock</label><br>
<input type="number" name="stock" id="stock"><br><br>

<label>Categoría</label><br>

<select name="id_categoria" id="id_categoria">
<option value="">Seleccione</option>
<option value="1">Playeras</option>
<option value="2">Pantalones</option>
<option value="3">Sudaderas</option>
</select>

<br><br>

<button type="submit" name="guardar">Guardar</button>

<p id="mensajeInsertar"></p>

</form>

<script src="js/script.js"></script>

</body>
</html>