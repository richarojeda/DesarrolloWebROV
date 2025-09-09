<?php include("proteger.php"); ?>
<form action="insert.php" method="post" enctype="multipart/form-data">
    <label>Fotografía: <input type="file" name="fotografia" required></label><br>
    <label>Nombre: <input type="text" name="nombres" required></label><br>
    <button type="submit">Guardar</button>
</form>
<a href="read.php">Volver</a>