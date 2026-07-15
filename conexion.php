<?php
$servidor = "mysql-tuusuario.alwaysdata.net";
$usuario = "fredyemirbenitogonzalez9@gmail.com";
$contrasena = "Fredy00!";
$basedatos = "tienda_ropa";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Configurar caracteres UTF-8
mysqli_set_charset($conexion, "utf8");
?>