<?php
include("conexion.php");

$mensaje = "";

if(isset($_POST['actualizar'])){

    $id = $_POST['id_producto'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['id_categoria'];

    $sql = "UPDATE productos
            SET nombre='$nombre',
                precio='$precio',
                stock='$stock',
                id_categoria='$categoria'
            WHERE id_producto='$id'";

    if(mysqli_query($conexion,$sql)){
        $mensaje = "Producto actualizado correctamente.";
    }else{
        $mensaje = "Error al actualizar el producto.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Modificar Producto</title>
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

<h2>Modificar Producto</h2>

<form method="POST" id="formModificar">

<label>ID del Producto</label><br>
<input type="number" name="id_producto" id="idModificar"><br><br>

<label>Nuevo Nombre</label><br>
<input type="text" name="nombre" id="nombreModificar"><br><br>

<label>Nuevo Precio</label><br>
<input type="number" step="0.01" name="precio"><br><br>

<label>Nuevo Stock</label><br>
<input type="number" name="stock"><br><br>

<label>Categoría</label><br>

<select name="id_categoria">
<option value="1">Playeras</option>
<option value="2">Pantalones</option>
<option value="3">Sudaderas</option>
</select>

<br><br>

<button type="submit" name="actualizar">Actualizar</button>

<p id="mensajeModificar"><?php echo $mensaje; ?></p>

</form>

<script src="js/script.js"></script>

</body>
</html>