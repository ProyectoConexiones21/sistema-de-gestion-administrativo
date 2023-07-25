<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('comunes/encabezado.php');?>
</head>
<body>
    <?php require_once('comunes/nav.php');?>
    <section conteiner-form>
        <div class="title-box">
            <h1 class="title">Registrar Usuario</h1>
        </div>
        <div class="form-box">
            <div class="row">
                <form action="" method="post">
                    <input type="text" name="cedula" id="cedula">
                </form>
            </div>
            <div class="row">
                <form action="" method="post">
                    <input type="text" name="nombre" id="nombre">
                    <input type="text" name="apellido" id="apellido">
                </form>
            </div>
            <div class="row">
                <form action="" method="post">
                    <input type="text" name="usuario" id="usuario">
                    <input type="text" name="contraseña" id="contraseña">
                </form>
            </div>
        </div>
    </section>
</body>
</html>