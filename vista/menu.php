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
            <div class="boton-desplegable">
                    <a href="#" id="btnmenu_s" class="boton-2 boton">Gestionar servicio <i class=' icon-bx bx bx-chevron-down'></i></a>
                    <ul class="menu_s" id="menu_s">
                    <li class="menu-items_s"><a href="#" class="menu-link_s">Incluir Linia Nueva</a></li>
                    <li class="menu-items_s"><a href="#" class="menu-link_s">Remplazar SIM Card</a></li>
                    <li class="menu-items_s"><a href="#" class="menu-link_s">Cambiar Abonado/CTA Pagadora</a></li>
                    <li class="menu-items_s"><a href="#" class="menu-link_s">Actualizar Datos</a></li>
                    <li class="menu-items_s"><a href="#" class="menu-link_s border">Cambiar Numero</a></li>
                    </ul>
                </div>
                
                <div class="boton-desplegable">
                    <a href="#" id="btnmenu" class="boton-2 boton">Gestionar Cliente <i class=' icon-bx bx bx-chevron-down'></i></a>
            
                    <ul class="menu" id="menu">
                    <li class="menu-items"><a href="?pagina=clientePrepago" class="menu-link">Registrar Cliente Prepago</a></li>
                    <li class="menu-items"><a href="?pagina=clienteCorporativo" class="menu-link border">Registrar Cliente Corporativo</a></li>
                    </ul>
                </div>
            </div>
            <div class="columna">
                <div class="boton-desplegable">
                    <a href="#" id="btnmenu_r" class="boton-2 boton">Generar Reporte<i class=' icon-bx bx bx-chevron-down'></i></a>
                    <ul class="menu_r" id="menu_r">
                    <li class="menu-items_r"><a href="#" class="menu-link_r">Pagina En Construccion</a></li>
                    <li class="menu-items_r"><a href="#" class="menu-link_r border">Pagina En Construccion</a></li>
                    </ul>
                </div>
                <a href="?pagina=usuario" class="boton-2 boton">Registrar Usuario</a>
            </div>
            <div class="columna">
                <form action="" method="post">
                    <input type="submit" class="boton-2 boton" value="Cerrar Sesión" name="cerrar">
                </form>
            </div>
        </div>
    </div>
    <script src="js/desplegableCliente.js"></script>
    <script src="js/desplegableServicios.js"></script>
    <script src="js/desplegableReportes.js"></script>
</body>
</html>