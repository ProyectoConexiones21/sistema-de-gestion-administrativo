<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('comunes/encabezado.php');?>
</head>
<body>
    <div class="fond">
    <?php require_once('comunes/nav.php');?>
    <section>
        <div class="conteiner">
            <div class="title-box">
                <h1 class="title">Registrar Usuario</h1>
            </div>
            <div class="form-contenedor">
            <form action="" method="post" name="f" id="f">
                <input type="text" name="accion" id="accion" style="display: none;">
                    <div class="row">
                        <div class="form-box box-modi">
                            <input type="text" name="cedula" id="cedula" required>
                            <label class="form-name">Cedula</label>
                            <div class="span">
                            <span id="scedula" class=""></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-box">
                            <input type="text" name="nombre" id="nombre" required>
                            <label class="form-name">Nombre</label>
                            <div class="span"><span id="snombre" class=""></span></div>
                        </div>
                        <div class="form-box">
                            <input type="text" name="apellido" id="apellido" required>
                            <label class="form-name">Apellido</label>
                            <div class="span"><span id="sapellido" class=""></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-box">
                            <input type="text" name="usuario" id="usuario" required>
                            <label class="form-name">Nombre de Usuario</label>
                            <div class="span"><span id="susuario" class=""></span></div>
                        </div>
                        <div class="form-box">
                            <input type="text" name="contraseña" id="contraseña" required>
                            <label class="form-name">Contraseña</label>
                            <div class="span"><span id="scontraseña" class=""></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-box opciones">
                            <input type="button" value="Guardar Usuario" id="guardar" name="guardar">
                        </div>
                        <div class="form-box opciones">
                            <input type="button" value="Modificar Usuario" id="modificar" name="modificar">
                        </div>
                        <div class="form-box opciones">
                            <input type="button" value="Eliminar Usuario" id="eliminar" name="eliminar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </div>
    <script type="text/javascript" src="js/registrarUsuario.js"></script>
</body>
</html>