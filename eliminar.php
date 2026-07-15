<?php
include("conexion.php");

$mensaje = "";

if(isset($_POST['eliminar'])){

    $id = $_POST['id_producto'];

    $sql = "DELETE FROM productos WHERE id_producto='$id'";

    if(mysqli_query($conexion,$sql)){
        $mensaje = "Producto eliminado correctamente.";
    }else{
        $mensaje = "Error al eliminar el producto.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Eliminar Producto</title>
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

<h2>Eliminar Producto</h2>

<form method="POST" id="formEliminar">

<label>ID del Producto</label><br>
<input type="number" name="id_producto" id="idEliminar"><br><br>

<button type="submit" name="eliminar">Eliminar</button>

<p id="mensajeEliminar"><?php echo $mensaje; ?></p>

</form>

<script src="js/script.js"></script>

</body>
</html>