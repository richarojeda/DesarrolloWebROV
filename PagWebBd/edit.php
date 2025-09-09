<?php
include("proteger.php");
include("conexion.php");
$id = $_POST['id'];
$nombres = $_POST['nombres'];

if ($_FILES['fotografia']['name']) {
    $foto = $_FILES['fotografia']['name'];
    $tmp = $_FILES['fotografia']['tmp_name'];
    move_uploaded_file($tmp, "images/$foto");
    $sql = "UPDATE hobies SET fotografia=?, nombres=? WHERE id=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssi", $foto, $nombres, $id);
} else {
    $sql = "UPDATE hobies SET nombres=? WHERE id=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("si", $nombres, $id);
}
$stmt->execute();
header("Location: read.php");
?>