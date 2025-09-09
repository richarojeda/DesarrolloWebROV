<?php
include("proteger.php");
include("conexion.php");
$id = $_GET['id'];
$sql = "DELETE FROM hobies WHERE id=?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
header("Location: read.php");
?>