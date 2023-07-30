<?php

require_once('modelo/registrarClienteCorporativo.php');

if(!is_file('modelo/'.$pagina.'.php')){

    echo "Falta definir la clase ".$pagina;
	exit;
}

if(is_file("vista/".$pagina.".php")){

    $o = new registrarClienteCorporativo();

    if(isset($_POST['accion'])){

        $o->set_rif($_POST['rif']);
        $o->set_nombreEmpresa($_POST['nombreEmpresa']);
        $o->set_priNombre($_POST['priNombre']);
        $o->set_segNombre($_POST['segNombre']);
        $o->set_priApellido($_POST['priApellido']);
        $o->set_segApellido($_POST['segApellido']);
        $o->set_cedula($_POST['cedula']);
        $o->set_direccion($_POST['direccion']);
        $o->set_telefono($_POST['telefono']);
        $o->set_correo($_POST['correo']);

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