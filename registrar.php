<?php
include('conexion.php');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, correo, password) VALUES ('$nombre', '$correo', '$password')";

if ($conexion->query($sql) === TRUE) {
    echo "<h3>¡Usuario registrado con éxito!</h3>";
    echo "<p>Bienvenido, <strong>$nombre</strong>.</p>";
    echo "<a href='index.php'>Volver a la tienda</a>";
} else {
    echo "Error al registrar el usuario: " . $conexion->error;
}

$conexion->close();
?>