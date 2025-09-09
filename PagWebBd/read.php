<?php
include("proteger.php");
include("conexion.php");
$sql = "SELECT id, fotografia, nombres FROM hobies";
$result = $con->query($sql);
?>
<div>
   Correo : <?php echo $_SESSION['correo']; ?>
   <a href="cerrar.php">Cerrar Sesin</a>
</div>
<table border="1">
    <tr>
      <th>Fotografía</th>
      <th>Nombre</th>
      <th>Operaciones</th>
    </tr>
   <?php while ($row = mysqli_fetch_array($result)) { ?>
        <tr>
           <td><img src="images/<?php echo $row['fotografia']; ?>" width="60"></td>
           <td><?php echo $row['nombres']; ?></td>
           <td>
               <a href="form-edit.php?id=<?php echo $row['id']?>">Editar</a> 
               <a href="delete.php?id=<?php echo $row['id']?>">Eliminar</a>
           </td>
        </tr>
   <?php } $con->close(); ?>
</table>
<a href="form-insertar.php">Insertar</a>