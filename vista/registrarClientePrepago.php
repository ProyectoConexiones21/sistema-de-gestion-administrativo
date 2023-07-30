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
                            <div class="span"><span id="snombre"></span></div>
                        </div>
                        <div class="form-box">
                            <input type="text" name="segNombre" id="seg-nombre" required>
                            <label class="form-name">Segundo Nombre</label>
                            <div class="span"><span id="s-seg-nombre"></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-box">
                            <input type="text" name="priApellido" id="apellido" required>
                            <label class="form-name">Primer Apellido</label>
                            <div class="span"><span id="sapellido"></span></div>
                        </div>
                        <div class="form-box">
                            <input type="text" name="segApellido" id="seg-apellido" required>
                            <label class="form-name">Segundo Apellido</label>
                            <div class="span"><span id="s-seg-apellido"></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-box">
                            <input type="text" name="rif" id="rif" required>
                            <label class="form-name">RIF personal</label>
                            <div class="span"><span id="srif"></span></div>
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
            <div class="conteiner-consultar">
                <div class="title-box">
                    <h1 class="title">Clientes Prepago Registrados</h1>
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
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>V-29000000</td>
                            <td>Leonardo</td>
                            <td>Leonardo</td>
                            <td>Medina</td>
                            <td>Medina</td>
                            <td>Barquisimeto</td>
                            <td>0400-0000000</td>
                            <td>Correo@gmail.com</td>
                        </tr>
                        <tr>
                            <td>V-27000000</td>
                            <td>Ricardo</td>
                            <td>Ricardo</td>
                            <td>Hernández</td>
                            <td>Hernández</td>
                            <td>Barquisimeto</td>
                            <td>0400-0000000</td>
                            <td>Correo@gmail.com</td>
                        </tr>
                        <tr>
                            <td>V-29000000</td>
                            <td>Yonjarman</td>
                            <td>Yonjarman</td>
                            <td>Pérez</td>
                            <td>Pérez</td>
                            <td>Barquisimeto</td>
                            <td>0400-0000000</td>
                            <td>Correo@gmail.com</td>
                        </tr>
                        <tr>
                            <td>V-29000000</td>
                            <td>Moises</td>
                            <td>Moises</td>
                            <td>Torrellas</td>
                            <td>Torrellas</td>
                            <td>Barquisimeto</td>
                            <td>0400-0000000</td>
                            <td>Correo@gmail.com</td>
                        </tr>
                        <tr>
                            <td>V-30000000</td>
                            <td>Néstor</td>
                            <td>Néstor</td>
                            <td>Vargas</td>
                            <td>Vargas</td>
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
    <script type="text/javascript" src="js/registrarClientePrepago.js"></script>
</body>
</html>