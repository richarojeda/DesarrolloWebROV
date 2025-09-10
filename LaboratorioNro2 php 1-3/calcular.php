<!DOCTYPE html>
<html>
<head>
    <title>Suma de Dígitos</title>
</head>
<body>
    <form method="post">
        <label>Ingrese un número entero positivo:</label>
        <input type="number" name="numero" min="0" required>
        <input type="submit" value="Calcular Suma">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n = $_POST['numero'];
        $suma = 0;
        $temp = $n;
        while ($temp > 0) {
            $suma += $temp % 10;
            $temp = (int)($temp / 10);
        }
        echo "<h3>La suma de los dígitos de $n es: $suma</h3>";
    }
    ?>
</body>
</html>
