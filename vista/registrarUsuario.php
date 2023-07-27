<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('comunes/encabezado.php');?>
</head>
<body>
    <?php require_once('comunes/nav.php');?>
    <section>
        <div class="conteiner">
            <div class="title-box">
                <h1 class="title">Registrar Usuario</h1>
            </div>
            <div class="form-contenedor">
            <form action="" method="post">
                    <div class="row">
                        <div class="form-box box-modi">
                            <input type="text" name="cedula" id="cedula" required>
                            <label class="form-name">Cedula</label>
                        </div>
                        <!-- <div class="form-box"></div> -->
                    </div>
                    <div class="row">
                        <div class="form-box">
                            <input type="text" name="nombre" id="nombre" required>
                            <label class="form-name">Nombre</label>
                        </div>
                        <div class="form-box">
                            <input type="text" name="apellido" id="apellido" required>
                            <label class="form-name">Apellido</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-box">
                            <input type="text" name="usuario" id="usuario" required>
                            <label class="form-name">Nombre de Usuario</label>
                        </div>
                        <div class="form-box">
                            <input type="text" name="contraseña" id="contraseña" required>
                            <label class="form-name">Contraseña</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-box opciones">
                            <input type="button" value="Guardar Usuario" id="guardar" name="incluir">
                        </div>
                        <div class="form-box opciones">
                            <input type="button" value="Modificar Usuario" id="guardar" name="incluir">
                        </div>
                        <div class="form-box opciones">
                            <input type="button" value="Eliminar Usuario" id="guardar" name="incluir">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>