<?php
$plan = $_POST['plan'];
?>
<!DOCTYPE html>
<head>
    <title>Datos del Cliente</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Datos del Cliente</h1>
    <form action="facturacion.php" method="post">
        <input type="hidden" name="plan" value="<?= $plan ?>">
        <label for="cliente">Nombre Completo:</label>
        <input type="text" name="cliente" id="cliente" required>
        
        <label for="cuit">CUIT:</label>
        <input type="text" name="cuit" id="cuit" required>
        
        <label for="domicilio">Domicilio:</label>
        <input type="text" name="domicilio" id="domicilio" required>
        
        <button type="submit">Siguiente</button>
    </form>
</body>
</html>
