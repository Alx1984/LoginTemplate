<?php
session_start();
include 'Usuarios.php';
$objUsuario = new Usuarios();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <h4>Login</h4>
    <br>
    <div class="form-control" style="width: 500px;">
        <fieldset>
            <legend>Formulario</legend> <br>
            <form action="login.php" method="post">
                <label for="usuario">Usuario:</label>
                <input type="text" name="txtUsuario" placeholder="Nombre de Usuario" class="form-control"> <br>
                <label for="password">Contraseña:</label>
                <input type="text" name="txtPassword" placeholder="Contraseña" class="form-control"> <br>
                <input type="submit" name="btnLogin" value="Entrar" class="btn btn-success">
            </form>
        </fieldset>
    </div>
    <?php

    if ($_POST) {
        $usuario = $_REQUEST["txtUsuario"];
        $contra = $_REQUEST["txtPassword"];

        $objUsuario->setUsuarioNombre($usuario);
        $objUsuario->setUsuarioPass($contra);

        $nivel = $objUsuario->validar();

        if($nivel != ""){
            $_SESSION["usuario"]["nivel"]=$nivel;
            $_SESSION["usuario"]["usuario"]=$usuario;
            header("Location:index.php");
        }else{
            header("Location:login.php");
        }
    }
?>
</body>

</html>