<?php
if(!empty($_POST["regresar"])){

    $pagina="inicio";

}
if(is_file("vista/".$pagina.".php")){
    require_once("vista/".$pagina.".php");
}
else{
    echo "PAGINA EN DESARROLLO.";
}


?>