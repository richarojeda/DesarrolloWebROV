<?php
function esPrimo($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
$primos = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cantidad'])) {
    $n = $_POST['cantidad'];
    $primos = [];
    $i = 2;
    while (count($primos) < $n) {
        if (esPrimo($i)) $primos[] = $i;
        $i++;
    }
}
include 'primos.php';
?>
