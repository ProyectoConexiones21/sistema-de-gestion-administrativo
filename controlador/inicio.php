<?php

 if(!empty($_POST["btningresar"])){
    
}
if(!empty($_POST["btningresar"]) and !empty($_POST["usuario"]) and !empty($_POST["contraseña"])){

    $usuario=$_POST["usuario"];
    $contraseña=$_POST["contraseña"];

    if($usuario=="administrador" and $contraseña=="123456"){
        $pagina="menu";
    }

} 


if(is_file("vista/".$pagina.".php")){
    require_once("vista/".$pagina.".php");
}
else{
    echo "PAGINA EN DESARROLLO.";
}


?>