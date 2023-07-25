<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once('comunes/encabezado.php'); ?>
</head>
<body>
    <div class="fondo">
        <div class=" conteiner-modificado contenedor">
        <div class="contenedor-img">
                <img class=" img-2 img" src="img/Movistar.svg" alt="">
            </div> 
            
            <div class="columna">
                <a href="?pagina=registrarUsuario" class="boton boton-2 border">Registrar Usuario</a>
                <ul class="menu-horizontal">
                    <li>
                        <a href="#" class="boton boton-2 border">Gestionar Cliente <i class=' icon-bx bx bx-chevron-down'></i></a>
                        <ul class="menu-vertical">
                            <li><a href="?pagina=registrarClientePrepago">Registrar Cliente Prepago</a></li>
                            <li><a href="?pagina=registrarClienteCorporativo">Registrar Cliente Corporativo</a></li>
                            <li><a href="#">Actualizar Datos</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="columna">
                <ul class="menu-horizontal">
                    <li>
                        <a href="#" class="boton boton-2 border">Gestionar Servicios <i class=' icon-bx bx bx-chevron-down'></i></a>
                        <ul class="menu-vertical menu-vertical-modifier">
                            <li><a href="?pagina=incluirLineaNueva">Incluir Línea Nueva</a></li>
                            <li><a href="#">Remplazar SIM Card</a></li>
                            <li><a href="#">Cambiar Abonado/CTA Pagadora</a></li>
                            <li><a href="#">Cambiar Número</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu-horizontal">
                    <li>
                        <a href="#" class="boton boton-2 border">Generar Reporte <i class=' icon-bx bx bx-chevron-down'></i></a>
                        <ul class="menu-vertical menu-vertical-modifier-2">
                            <li><a href="#">Página en Construcción</a></li>
                            <li><a href="#">Página en Construcción</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="columna">
                <form action="" method="post">
                    <input type="submit" class="boton-2 boton" value="Cerrar Sesión" name="cerrar">
                </form>
            </div>
        </div>
    </div>
    <!-- <script src="js/desplegableCliente.js"></script>
    <script src="js/desplegableServicios.js"></script>
    <script src="js/desplegableReportes.js"></script> -->
</body>
</html>