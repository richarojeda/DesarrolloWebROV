<?php
include("proteger.php");
include("conexion.php");
$nombres = $_POST['nombres'];
$foto = $_FILES['fotografia']['name'];
$tmp = $_FILES['fotografia']['tmp_name'];
move_uploaded_file($tmp, "images/$foto");

$sql = "INSERT INTO hobies (fotografia, nombres) VALUES (?, ?)";
$stmt = $con->prepare($sql);
$stmt->bind_param("ss", $foto, $nombres);
$stmt->execute();
header("Location: read.php");
?>