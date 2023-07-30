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
                            <input type="text" name="priNombre" id="nombre" required>
                            <label class="form-name">Primer Nombre</label>
                            <div class="span"><span id="snombre" class=""></span></div>
                        </div>
                        <div class="form-box">
                            <input type="text" name="segNombre" id="seg-nombre" required>
                            <label class="form-name">Segundo Nombre</label>
                            <div class="span"><span id="s-seg-nombre" class=""></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-box">
                            <input type="text" name="priApellido" id="apellido" required>
                            <label class="form-name">Primer Apellido</label>
                            <div class="span"><span id="sapellido" class=""></span></div>
                        </div>
                        <div class="form-box">
                            <input type="text" name="segApellido" id="seg-apellido" required>
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>V-29000000</td>
                            <td>Leonardo</td>
                            <td>Leonardo</td>
                            <td>Medina</td>
                            <td>Medina</td>
                            <td>leonardom</td>
                            <td>******</td>
                        </tr>
                        <tr>
                            <td>V-27000000</td>
                            <td>Ricardo</td>
                            <td>Ricardo</td>
                            <td>Hernández</td>
                            <td>Hernández</td>
                            <td>ricardoh</td>
                            <td>******</td>
                        </tr>
                        <tr>
                            <td>V-29000000</td>
                            <td>Yonjarman</td>
                            <td>Yonjarman</td>
                            <td>Pérez</td>
                            <td>Pérez</td>
                            <td>yonjarp</td>
                            <td>******</td>
                        </tr>
                        <tr>
                            <td>V-29000000</td>
                            <td>Moises</td>
                            <td>Moises</td>
                            <td>Torrellas</td>
                            <td>Torrellas</td>
                            <td>moisest</td>
                            <td>******</td>
                        </tr>
                        <tr>
                            <td>V-30000000</td>
                            <td>Néstor</td>
                            <td>Néstor</td>
                            <td>Vargas</td>
                            <td>Vargas</td>
                            <td>nestorv</td>
                            <td>******</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </section>
    </div>
    <script type="text/javascript" src="js/registrarUsuario.js"></script>
</body>
</html>