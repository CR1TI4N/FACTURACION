<?php
$plan = $_POST['plan'];
$cliente = $_POST['cliente'];
$cuit = $_POST['cuit'];
$domicilio = $_POST['domicilio'];
?>
<!DOCTYPE html>
<head>
    <title>Datos de Facturación</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Datos de Facturación</h1>
    <form action="guardar_factura.php" method="post">
        <input type="hidden" name="plan" value="<?= $plan ?>">
        <input type="hidden" name="cliente" value="<?= $cliente ?>">
        <input type="hidden" name="cuit" value="<?= $cuit ?>">
        <input type="hidden" name="domicilio" value="<?= $domicilio ?>">

        <label for="Titular_tarjeta">Titular de la Tarjeta:</label>
        <input type="text" name="Titular_tarjeta" id="Titular_tarjeta" required>
        
        <label for="Numero_tarjeta">Número de Tarjeta:</label>
        <input type="text" name="Numero_tarjeta" id="Numero_tarjeta" required>
        
        <label for="vencimiento">Vencimiento:</label>
        <input type="text" name="vencimiento" id="vencimiento" placeholder="MM/AA" required>
        
        <label for="seguridad">Código de Seguridad:</label>
        <input type="text" name="seguridad" id="seguridad" required>
        
        <button type="submit">Realizar Compra</button>
    </form>
</body>
</html>
