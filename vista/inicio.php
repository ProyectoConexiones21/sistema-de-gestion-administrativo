<!DOCTYPE html>
<html lang="en">
<?php require_once('comunes/encabezado.php'); ?>
<body>
    <div class="back">
        <div class="conteiner">
            <div class="conteiner-img">
                <img class="img" src="img/Movistar.svg" alt="">
            </div>
            <div class="form-box usuario">
                <input class="form" type="text" id="usuario" name="usuario">
                <label class="form-name">Nombre de usuario</label>
                <i class='bx bx-user-circle icon'></i>
            </div>
            <div class="form-box clave">
                <input class="form" type="password" id="contraseña" name="contraseña">
                <label class="form-name">Contraseña</label>
                <i class='bx bx-lock-alt icon'></i>
            </div>
            <div class="boton">
                <a href="?pagina=menu" type="button" id="iniciarSesion" name="iniciarSesion" class="btn ">Iniciar sesión</a>
            </div>                
        </div>
    </div>
</body>          