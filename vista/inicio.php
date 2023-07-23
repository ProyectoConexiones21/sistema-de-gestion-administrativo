<!DOCTYPE html>
<html lang="en">
<?php require_once('comunes/encabezado.php'); ?>
<body>
    <div class="back">
        <form method="post" action="">
            <div class="conteiner">
                <div class="conteiner-img">
                    <img class="img" src="img/Movistar.svg" alt="">
                </div>
                <div class="form-box usuario">
                    <input class="form" type="text" id="usuario" name="usuario" required>
                    <label class="form-name">Nombre de usuario</label>
                    <i class='bx bx-user-circle icon'></i>
                </div>
                <div class="form-box clave">
                    <input class="form" type="password" id="contraseña" name="contraseña" required>
                    <label class="form-name">Contraseña</label>
                    <i class='bx bx-lock-alt icon'></i>
                </div>
                <?php
                include ("controlador/inicio.php");
                ?>
                <div class="boton">
                    <input type="submit" class="btn" name="btningresar" id="btningresar" value="Iniciar Sesion">
                </div>                
            </div>
        </form>
    </div>
</body>          