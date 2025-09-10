<!DOCTYPE html>
<html>
<head>
    <title>Generar Números Primos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form method="post" action="calcularprimos.php">
        <label>Cantidad de numeros primos a generar:</label>
        <input type="number" name="cantidad" min="1" required>
        <input type="submit" value="Generar">
    </form>
    <?php if (isset($primos) && is_array($primos) && count($primos) > 0): ?>
        <ul class="primos-lista">
            <?php foreach ($primos as $p): ?>
                <li><?= $p ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
