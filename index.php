<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Tienda Multimarcas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <div class="contenedor">
        <h1>🛍️ Tienda Multimarcas - Proyecto Escolar</h1>

        <nav>
            <ul>
                <li><a href="index.php" class="activo">Inicio</a></li>
                <li><a href="calzado.html">Calzado</a></li>
                <li><a href="ropa.html">Ropa</a></li>
                <li><a href="celulares.html">Celulares</a></li>
                <li><a href="cosmeticos.html">Cosméticos</a></li>
            </ul>
        </nav>

        <div class="seccion">
            <h2>Bienvenido a Nuestra Tienda Online</h2>
            <p>Ofrecemos una amplia variedad de productos de las marcas más reconocidas del mercado como Nike, Adidas, Samsung y L'Oréal. Explora nuestras categorías dedicadas para encontrar tenis, ropa deportiva, tecnología móvil y artículos de cuidado personal con los mejores precios.</p>
        </div>

        <div class="seccion">
            <h2>1. Registro e Iniciar Sesión</h2>
            <form action="registrar.php" method="POST">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required>

                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Crea tu contraseña" required>

                <button type="submit">Crear Cuenta e Iniciar Sesión</button>
            </form>
        </div>

        <div class="seccion">
            <h2>2. Formulario de Venta (Realizar Pedido)</h2>
            <form action="comprar.php" method="POST">
                <label for="marca">Selecciona la Marca / Producto:</label>
                <select id="marca" name="marca" required>
                    <option value="">-- Selecciona una opción --</option>
                    <option value="Nike - Tenis">Nike (Calzado)</option>
                    <option value="Adidas - Ropa">Adidas (Ropa)</option>
                    <option value="Samsung - Celular">Samsung (Celulares)</option>
                    <option value="LOreal - Cosméticos">L'Oréal (Cosméticos)</option>
                </select>

                <label for="cantidad">Cantidad de productos:</label>
                <input type="number" id="cantidad" name="cantidad" min="1" value="1" required>

                <label for="direccion">Dirección de Envío:</label>
                <input type="text" id="direccion" name="direccion" placeholder="Calle, Número, Colonia" required>

                <label for="pago">Método de Pago:</label>
                <select id="pago" name="pago" required>
                    <option value="Tarjeta">Tarjeta de Débito / Crédito</option>
                    <option value="Efectivo">Pago en OXXO / Efectivo</option>
                </select>

                <button type="submit" style="background-color: #28a745;">Confirmar y Enviar Pedido (SQL)</button>
            </form>
        </div>

        <footer>
            <p>>Perez Linares Valentin</p>
            <p><strong>Grupo:</strong> 5°I</p>
        </footer>
    </div>

</body>
</html>