<?php
session_start();
include("conexion.php");
$correo = $_POST['correo'];
$password = sha1($_POST['password']);

$sql = "SELECT id, correo FROM usuarios WHERE correo=? AND password=?";
$stmt = $con->prepare($sql);
$stmt->bind_param("ss", $correo, $password);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['correo'] = $row['correo'];
    $_SESSION['usuario_id'] = $row['id'];
    header("Location: read.php");
    exit();
} else {
    echo "Error: datos de autenticación incorrectos";
    ?>
    <meta http-equiv="refresh" content="3;url=form-login.html">
    <?php
}
?>