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
                <h1 class="title">Registrar Cliente Prepago</h1>
            </div>
            <div class="form-contenedor">
            <form action="" method="post" name="f" id="f">
                <input type="text" id="accion" name="accion" style="display: none;">
                    <div class="row">
                        <div class="form-box">
                            <input type="text" name="nombre" id="nombre" required>
                            <label class="form-name">Nombre</label>
                            <div class="span"><span id="snombre"></span></div>
                        </div>
                        <div class="form-box">
                            <input type="text" name="apellido" id="apellido" required>
                            <label class="form-name">Apellido</label>
                            <div class="span"><span id="sapellido"></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-box">
                            <input type="text" name="cedula" id="cedula" required>
                            <label class="form-name">Cedula</label>
                            <div class="span"><span id="scedula"></span></div>
                        </div>
                        <div class="form-box">
                            <input type="text" name="direccion" id="direccion" required>
                            <label class="form-name">Dirección</label>
                            <div class="span"><span id="sdireccion"></span></div>
                        </div>
                        <!-- <div class="form-box"></div> -->
                    </div>
                    <div class="row">
                        <div class="form-box">
                            <input type="text" name="telefono" id="telefono" required>
                            <label class="form-name">Telefono</label>
                            <div class="span"><span id="stelefono"></span></div>
                        </div>
                        <div class="form-box">
                            <input type="text" name="correo" id="correo" required>
                            <label class="form-name">Correo</label>
                            <div class="span"><span id="scorreo"></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-box opciones">
                            <input type="button" value="Guardar Cliente" id="guardar" name="guardar">
                        </div>
                        <div class="form-box opciones">
                            <input type="button" value="Modificar Cliente" id="modificar" name="modificar">
                        </div>
                        <div class="form-box opciones">
                            <input type="button" value="Eliminar Cliente" id="eliminar" name="eliminar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </div>
    <script type="text/javascript" src="js/registrarClientePrepago.js"></script>
</body>
</html>