<?php
session_start();
include("db.php");
$usuario = $_POST["usuario"];
$password = $_POST["password"];

$query = mysqli_query($conexion,"select* from students where username = '".$usuario."' and password = '".$password."'");
$filas = mysqli_num_rows($query);

if ($filas) {
    header("location:../../home.php", true, 301);
    $_SESSION['usuario']=$usuario;
    exit();
} else {
    header("location:../../index.html", true, 301);
    exit();
    ?>
    <h1>Autentification Failed</h1>
    <?php
}
mysqli_free_result($query);
mysqli_close($conexion);
?>