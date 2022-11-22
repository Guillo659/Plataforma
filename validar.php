<?php
include("db.php");
$usuario = $_POST["usuario"];
$password = $_POST["password"];

$consulta = "select* from users where username = *$usuario* and pass = *$password*";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location:home.html");
} else {
    include("index.html");
    ?>
    <h1>Autentification Failed</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
