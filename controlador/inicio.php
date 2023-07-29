<?php

require_once('modelo/inicio.php');

if(!is_file('modelo/'.$pagina.'.php')){

    echo "Falta definir la clase ".$pagina;
	exit;
}

if(is_file('vista/'.$pagina.'.php')){

    $o = new inicio();

    if(isset($_POST['accion'])){

        $o->set_usuario($_POST['usuario']);
        $o->set_contraseña($_POST['contraseña']);

        if(!empty($_POST["ingresar"])){

            $usuario=$_POST["usuario"];
            $contraseña=$_POST["contraseña"];
        
            if($usuario=="administrador" and $contraseña=="123456"){
                $pagina="menu";
            }
        }
        
    }

    require_once("vista/".$pagina.".php");
}
else{
    echo "PAGINA EN DESARROLLO.";
}

/* if(!empty($_POST["ingresar"]) and !empty($_POST["usuario"]) and !empty($_POST["contraseña"])){

    $usuario=$_POST["usuario"];
    $contraseña=$_POST["contraseña"];

    if($usuario=="administrador" and $contraseña=="123456"){
        $pagina="menu";
    }

} */ 

?>







