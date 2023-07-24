<?php
if(!empty($_POST["cerrar"])){

    exit;

}
if(is_file("vista/".$pagina.".php")){
    require_once("vista/".$pagina.".php");
}
else{
    echo "PAGINA EN DESARROLLO.";
}


?>