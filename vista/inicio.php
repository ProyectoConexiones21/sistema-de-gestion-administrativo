<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once('comunes/encabezado.php'); ?>
</head>
<body>
    <div class="fondo">
        <form method="post" action="">
            <div class="contenedor">
                <div class="contenedor-img">
                    <img class="img" src="img/Movistar.svg" alt="">
                </div>
                <div class="formulario-box usuario">
                    <input class="formulario" type="text" id="usuario" name="usuario" required>
                    <label class="formulario-name">Nombre de usuario</label>
                    <i class='bx bx-user-circle icon'></i>
                </div>
                <div class="formulario-box clave">
                    <input class="formulario" type="password" id="contraseña" name="contraseña" required>
                    <label class="formulario-name">Contraseña</label>
                    <i class='bx bx-lock-alt icon'></i>
                </div>
                <?php
                include ("controlador/inicio.php");
                ?>
                <div class="boton-box">
                    <input type="submit" class="boton" name="btningresar" id="btningresar" value="Iniciar Sesión">
                </div>                
            </div>
        </form>
    </div>
</body>          