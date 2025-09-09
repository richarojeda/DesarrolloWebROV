<?php
include("proteger.php");
include("conexion.php");
$id = $_GET['id'];
$sql = "SELECT * FROM hobies WHERE id=?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>
<form action="edit.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>Fotografía actual: <img src="images/<?php echo $row['fotografia']; ?>" width="60"></label><br>
    <label>Nueva Fotografía: <input type="file" name="fotografia"></label><br>
    <label>Nombre: <input type="text" name="nombres" value="<?php echo $row['nombres']; ?>" required></label><br>
    <button type="submit">Actualizar</button>
</form>
<a href="read.php">Volver</a>