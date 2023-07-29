<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once('comunes/encabezado.php'); ?>
</head>
<body>
    <div class="fondo">
        <form method="post" action="">
        <input type="text" name="accion" id="accion" style="display: none;">
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
                <div class="boton-box">
                    <input type="submit" class="boton" name="ingresar" id="ingresar" value="Iniciar Sesión">
                </div>                
            </div>
        </form>
    </div>
    <script type="text/javascript" src="js/inicio.js"></script>
</body> 
</html>         