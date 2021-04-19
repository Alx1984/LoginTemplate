<?php
session_start();
if (!isset($_SESSION["ususario"])) {
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    Hola <?php echo $_SESSION["usuario"]["usuario"]."[".
    $_SESSION["usuario"]["nivel"]
    ."]"  ?> | <a href='login.php?cerrar=true'> Cerrar Sesión</a>
</pre>
</body>
</html>