<!DOCTYPE html>
<html>
<head>
    <title>Conversión de Temperatura</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form method="post">
        <label>Temperatura:</label>
        <input type="number" step="any" name="temp" required>
        <select name="unidad">
            <option value="C">Celsius (°C)</option>
            <option value="F">Fahrenheit (°F)</option>
            <option value="K">Kelvin (K)</option>
        </select>
        <input type="submit" value="Convertir">
    </form>
    <?php
    function convertir($valor, $unidad) {
        switch($unidad) {
            case 'C':
                $c = $valor;
                $f = $c * 9/5 + 32;
                $k = $c + 273.15;
                break;
            case 'F':
                $f = $valor;
                $c = ($f - 32) * 5/9;
                $k = $c + 273.15;
                break;
            case 'K':
                $k = $valor;
                $c = $k - 273.15;
                $f = $c * 9/5 + 32;
                break;
        }
        return [round($c,2), round($f,2), round($k,2)];
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valor = $_POST['temp'];
        $unidad = $_POST['unidad'];
        list($c, $f, $k) = convertir($valor, $unidad);
        echo "<table style='border:2px solid green;background:#fff;'><tr><th>Celsius (°C)</th><th>Fahrenheit (°F)</th><th>Kelvin (K)</th></tr>";
        echo "<tr><td>$c</td><td>$f</td><td>$k</td></tr></table>";
    }
    ?>
</body>
</html>
