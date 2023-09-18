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
                            <input type="text" name="priNombre" id="priNombre" required>
                            <label class="form-name">Primer Nombre</label>
                            <div class="span"><span id="snombre" class=""></span></div>
                        </div>
                        <div class="form-box">
                            <input type="text" name="segNombre" id="segNombre" required>
                            <label class="form-name">Segundo Nombre</label>
                            <div class="span"><span id="s-seg-nombre" class=""></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-box">
                            <input type="text" name="priApellido" id="priApellido" required>
                            <label class="form-name">Primer Apellido</label>
                            <div class="span"><span id="sapellido" class=""></span></div>
                        </div>
                        <div class="form-box">
                            <input type="text" name="segApellido" id="segApellido" required>
                            <label class="form-name">Segundo Apellido</label>
                            <div class="span"><span id="s-seg-apellido" class=""></span></div>
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
                        <button type="button" class="opciones" id="guardar" >Guardar Usuario</button>
                        <button type="button" class="opciones" id="modificar" >Modificar Usuario</button>
                        <button type="button" class="opciones" id="eliminar" >Eliminar Usuario</button>
                        <button type="button" class="opciones" id="consultar" >Consultar Usuario</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="conteiner-consultar">
                <div class="title-box">
                    <h1 class="title">Usuarios Registrados</h1>
                </div>
                <div class="conteiner-busqueda">
                <input class="busqueda" type="text" id="busqueda" name="busqueda">
                <i class='lupa bx bx-search'></i>
                </div>
                <table>
                    
                    <thead>
                        <tr>
                            <th>Cedula</th>
                            <th>Primer Nombre</th>
                            <th>Segundo Nombre</th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="resultadoconsulta">
                        
                    </tbody>
                </table>
            </div>
    </section>
    </div>
    <script type="text/javascript" src="js/registrarUsuario.js"></script>
</body>
</html>