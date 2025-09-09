<?php
$con = new mysqli("localhost", "root", "", "hobbiesdb");
if ($con->connect_error) {
    die("Error de conexión: " . $con->connect_error);
}
?>