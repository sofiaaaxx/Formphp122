<?php
// Capturar los datos del formulario
$producto1 = $_POST['producto1'];
$precio1 = (float)$_POST['precio1'];

$producto2 = $_POST['producto2'];
$precio2 = (float)$_POST['precio2'];

$producto3 = $_POST['producto3'];
$precio3 = (float)$_POST['precio3'];

// Calcular la suma de los precios
$total = $precio1 + $precio2 + $precio3;

// Aplicar descuento del 16%
$descuento = $total * 0.16;
$total_pagar = $total - $descuento;

// Mostrar resultados
echo "<h2>Detalle de Compra</h2>";
echo "Producto 1: $producto1 - $$precio1 <br>";
echo "Producto 2: $producto2 - $$precio2 <br>";
echo "Producto 3: $producto3 - $$precio3 <br><br>";

echo "Suma de precios: $$total <br>";
echo "Descuento (16%): -$$descuento <br>";
echo "<strong>Total a pagar: $$total_pagar</strong>";
?>
