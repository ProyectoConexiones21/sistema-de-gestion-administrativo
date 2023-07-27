<?php
if(!empty($_POST["cerrar"])){

    $pagina="inicio";

}
if(is_file("vista/".$pagina.".php")){
    require_once("vista/".$pagina.".php");
}
else{
    echo "PAGINA EN DESARROLLO.";
}


?>