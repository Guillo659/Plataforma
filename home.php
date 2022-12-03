<?php 
    session_start();
    include("src/php/db.php");
    $user = $_SESSION['usuario']; 
?>
<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Notas IE LA RIBERA</title>
</head>
<body>
    <main>
        <div>
            <h1>Hola <?php echo $user ?></h1>
        </div>
    </main>
</body>
</html>