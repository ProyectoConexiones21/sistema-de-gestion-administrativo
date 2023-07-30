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
                <h1 class="title">Registrar Cliente Corporativo</h1>
            </div>
            <div class="form-contenedor">
            <form action="" method="post" id="f" name="f">
                <input type="text" name="accion" id="accion" style="display: none;">
                    <div class="row">
                        <div class="form-box">
                            <input type="text" name="rif" id="rif" required>
                            <label class="form-name">RIF de la empresa</label>
                            <div class="span"><span id="srif" class=""></span></div>
                        </div>
                        <span id="srif" class="span"></span>
                        <div class="form-box">
                            <input type="text" name="nombreEmpresa" id="nombreEmpresa" required>
                            <label class="form-name">Nombre de la empresa</label>
                            <div class="span"><span id="snombreEmpresa" class=""></span></div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-box">
                            <input type="text" name="priNombre" id="nombre" required>
                            <label class="form-name">Primer Nombre del representante</label>
                            <div class="span"><span id="snombre" class=""></span></div>
                        </div>
                        <div class="form-box">
                            <input type="text" name="segNombre" id="seg-nombre" required>
                            <label class="form-name">Segundo Nombre del representante</label>
                            <div class="span"><span id="s-seg-nombre" class=""></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-box">
                            <input type="text" name="priApellido" id="apellido" required>
                            <label class="form-name">Primer Apellido del representante</label>
                            <div class="span"><span id="sapellido" class=""></span></div>
                        </div>
                        <div class="form-box">
                            <input type="text" name="segApellido" id="seg-apellido" required>
                            <label class="form-name">Segundo Apellido del representante</label>
                            <div class="span"><span id="s-seg-apellido" class=""></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-box">
                            <input type="text" name="cedula" id="cedula" required>
                            <label class="form-name">Cedula del representante</label>
                            <div class="span"><span id="scedula" class=""></span></div>
                        </div>
                        <div class="form-box">
                            <input type="text" name="direccion" id="direccion" required>
                            <label class="form-name">Dirección</label>
                            <div class="span"><span id="sdireccion" class=""></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-box">
                            <input type="text" name="telefono" id="telefono" required>
                            <label class="form-name">Telefono</label>
                            <div class="span"><span id="stelefono" class=""></span></div>
                        </div>
                        <div class="form-box">
                            <input type="text" name="correo" id="correo" required>
                            <label class="form-name">Correo</label>
                            <div class="span"><span id="scorreo" class=""></span></div>
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
            <div class="conteiner-consultar">
                <div class="title-box">
                    <h1 class="title">Clientes Corporativos Registrados</h1>
                </div>
                <div class="conteiner-busqueda">
                <input class="busqueda" type="text" id="busqueda" name="busqueda">
                <i class='lupa bx bx-search'></i>
                </div>
                <table>
                    
                    <thead>
                        <tr>
                            <th>RIF de la empresa</th>
                            <th>Nombre de la empresa</th>
                            <th>Primer Nombre del representante</th>
                            <th>Segundo Nombre del representante</th>
                            <th>Primer Apellido del representante</th>
                            <th>Segundo Apellido del representante</th>
                            <th>Cedula del representante</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>J-00000000-0</td>
                            <td>Nexo.int</td>
                            <td>Leonardo</td>
                            <td>Leonardo</td>
                            <td>Medina</td>
                            <td>Medina</td>
                            <td>V-29000000</td>
                            <td>Barquisimeto</td>
                            <td>0400-0000000</td>
                            <td>Correo@gmail.com</td>
                        </tr>
                        <tr>
                            <td>J-00000000-0</td>
                            <td>Nexo.int</td>
                            <td>Ricardo</td>
                            <td>Ricardo</td>
                            <td>Hernández</td>
                            <td>Hernández</td>
                            <td>V-27000000</td>
                            <td>Barquisimeto</td>
                            <td>0400-0000000</td>
                            <td>Correo@gmail.com</td>
                        </tr>
                        <tr>
                            <td>J-00000000-0</td>
                            <td>Nexo.int</td>
                            <td>Yonjarman</td>
                            <td>Yonjarman</td>
                            <td>Pérez</td>
                            <td>Pérez</td>
                            <td>V-29000000</td>
                            <td>Barquisimeto</td>
                            <td>0400-0000000</td>
                            <td>Correo@gmail.com</td>
                        </tr>
                        <tr>
                            <td>J-00000000-0</td>
                            <td>Nexo.int</td>
                            <td>Moises</td>
                            <td>Moises</td>
                            <td>Torrellas</td>
                            <td>Torrellas</td>
                            <td>V-29000000</td>
                            <td>Barquisimeto</td>
                            <td>0400-0000000</td>
                            <td>Correo@gmail.com</td>
                        </tr>
                        <tr>
                            <td>J-00000000-0</td>
                            <td>Nexo.int</td>
                            <td>Néstor</td>
                            <td>Néstor</td>
                            <td>Vargas</td>
                            <td>Vargas</td>
                            <td>V-30000000</td>
                            <td>Barquisimeto</td>
                            <td>0400-0000000</td>
                            <td>Correo@gmail.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    </div>
    <script type="text/javascript" src="js/registrarClienteCorporativo.js"></script>
</body>
</html>