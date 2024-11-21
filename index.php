<!DOCTYPE html>
<head>
    <title>Elegir Plan</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Elije un Plan</h1>
    <form action="cliente.php" method="post">
        <p><strong>Plan básico gratuito</strong> - Plan Actual</p>
        <label for="plan">
            <input type="radio" name="plan" value="Plan Premium" required> <strong>Plan Premium</strong> - $5000
        </label>
        <button type="submit">Continuar</button>
    </form>
</body>
</html>
