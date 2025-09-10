<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cantidad'])) {
    $cantidad = intval($_POST['cantidad']);
    echo '<form method="post" action="ordenar.php">';
    for ($i = 1; $i <= $cantidad; $i++) {
        echo "<label>Palabra $i:</label> <input type='text' name='palabras[]' required><br>";
    }
    echo '<input type="submit" value="Ordenar">';
    echo '</form>';
} else {
    header('Location: index_palabras.php');
    exit();
}
?>
