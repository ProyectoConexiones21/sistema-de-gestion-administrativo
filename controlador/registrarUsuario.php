<?php

require_once('modelo/registrarUsuario.php');

if(!is_file('modelo/'.$pagina.'.php')){

    echo "Falta definir la clase ".$pagina;
	exit;
}

if(is_file('vista/'.$pagina.'.php')){

    $o = new registrarUsuario();

    if(isset($_POST['accion'])){

        $o->set_cedula($_POST['cedula']);
        $o->set_nombre($_POST['nombre']);
        $o->set_apellido($_POST['apellido']);
        $o->set_usuario($_POST['usuario']);
        $o->set_contraseña($_POST['contraseña']);

        $accion = $_POST['accion'];
		  if($accion=='guardar'){
			$mensaje =  $o->guardar();
		  }
		  elseif($accion=='modificar'){
			$mensaje =  $o->modificar();
			
		  }
		  elseif($accion=='eliminar'){
			$mensaje =  $o->eliminar();
			
		  }
    }

    require_once("vista/".$pagina.".php");
}
else{
    echo "PAGINA EN DESARROLLO.";
}


?>