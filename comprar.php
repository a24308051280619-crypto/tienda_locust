<?php 
include('conexion.php'); 

$marca = $_POST['marca'];
$cantidad = $_POST['cantidad'];
$direccion = $_POST['direccion'];
$pago = $_POST['pago'];

$sql = "INSERT INTO pedidos (marca_producto, cantidad, direccion, metodo_pago) 
        VALUES ('$marca', '$cantidad', '$direccion', '$pago')";

if ($conexion->query($sql) === TRUE) {
    echo "<h3>¡Pedido realizado y guardado con éxito!</h3>";
    echo "<p><strong>Producto:</strong> $marca</p>";
    echo "<p><strong>Cantidad:</strong> $cantidad</p>";
    echo "<a href='index.php'>Volver a la tienda</a>";
    echo "<h3>¡Un Corpser abrirá un agujero de emergencia para entregar su pedido!</h3>";
    echo "<h3>Si no recibe su pedido en menos de 28hrs se lleva un peluche de Berserker ¡GRATIS!</h3>";
} else {
    echo "Error al procesar la compra: " . $conexion->error;
}

$conexion->close();
?>