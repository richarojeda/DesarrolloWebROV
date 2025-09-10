<!DOCTYPE html>
<html>
<head>
    <title>Palabras Ordenadas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php
function ordenarPalabras($arr) {
    sort($arr, SORT_STRING | SORT_FLAG_CASE);
    return $arr;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['palabras'])) {
    $palabras = $_POST['palabras'];
    $ordenadas = ordenarPalabras($palabras);
    echo '<div class="palabras-ordenadas-container">';
    echo '<ul class="palabras-ordenadas-lista">';
    foreach ($ordenadas as $palabra) {
        echo "<li>$palabra</li>";
    }
    echo '</ul></div>';
} else {
    header('Location: index_palabras.php');
    exit();
}
?>
</body>
</html>
