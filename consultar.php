<?php
include("conexion.php");

$sql = "SELECT productos.id_producto,
               productos.nombre,
               productos.precio,
               productos.stock,
               categorias.nombre AS categoria
        FROM productos
        INNER JOIN categorias
        ON productos.id_categoria = categorias.id_categoria";

$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultar Productos</title>
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

<h2>Lista de Productos</h2>

<input type="text" id="buscar" placeholder="Buscar producto">
<button onclick="filtrarTabla()">Buscar</button>

<p id="mensajeConsulta"></p>

<table border="1" id="tablaDatos">

<thead>
<tr>
<th>ID</th>
<th>Producto</th>
<th>Precio</th>
<th>Stock</th>
<th>Categoría</th>
</tr>
</thead>

<tbody>

<?php
while($fila = mysqli_fetch_assoc($resultado)){
?>

<tr>
<td><?php echo $fila['id_producto']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td>$<?php echo $fila['precio']; ?></td>
<td><?php echo $fila['stock']; ?></td>
<td><?php echo $fila['categoria']; ?></td>
</tr>

<?php
}
?>

</tbody>

</table>

<script src="js/script.js"></script>

</body>
</html>