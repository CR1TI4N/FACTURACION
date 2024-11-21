<?php
$plan = $_POST['plan'] ?? "";
$cliente = $_POST['cliente'] ?? "";
$cuit = $_POST['cuit'] ?? "";
$domicilio = $_POST['domicilio'] ?? "";

// Guardar en facturas.txt
$linea = "Plan: $plan | Cliente: $cliente | CUIT: $cuit | Domicilio: $domicilio\n";
file_put_contents('facturas.txt', $linea, FILE_APPEND);

echo "<h1>Factura Guardada</h1>";
echo "<p>Gracias por su compra, $cliente.</p>";
echo "<a href='index.php'>Volver al inicio</a>";

?>

<!DOCTYPE html>
<head>
    <title>Factura Generada</title>
<body>
    <h2>Factura</h2>
    <p><strong>Razón Social:</strong> EffiTask</p>
    <p><strong>Factura C</strong></p>
    <p><strong>Domicilio Comercial:</strong> San Juan 1221</p>
    <p><strong>Condición frente al IVA:</strong> Responsable Monotributo</p>
    <p><strong>Periodo Facturado Desde:</strong> 01/11/2024</p>
    <p><strong>Hasta:</strong> 01/11/2024</p>
    <p><strong>Punto de Venta:</strong> 00001</p>
    <p><strong>Comp. Nro:</strong> 00000001</p>
    <p><strong>Fecha de Emisión:</strong> <?php echo date("d/m/Y"); ?></p>
    
    <h3>Resumen de Compra</h3>
    <p><strong>Cliente:</strong> <?php echo ($cliente); ?></p>
    <p><strong>CUIT:</strong> <?php echo ($cuit); ?></p>
    <p><strong>Domicilio:</strong> <?php echo ($domicilio); ?></p>
    <p><strong>Plan Seleccionado:</strong> <?php echo ($plan); ?></p>
    <p><strong>Valor del Plan:</strong> $5000 </p>

</body>
</html>
