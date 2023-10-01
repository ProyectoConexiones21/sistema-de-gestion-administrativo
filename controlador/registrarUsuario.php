<?php



if(!is_file('modelo/'.$pagina.'.php')){

    echo "Falta definir la clase ".$pagina;
	exit;
}

require_once("modelo/".$pagina.".php");

if(is_file("vista/".$pagina.".php")){


    if(!empty($_POST)){

      $o = new registrarUsuario();
      $accion = $_POST['accion'];
    
      if($accion=='consultar'){
        echo  json_encode($o->consultar());  
      }

      elseif($accion=='consultatr'){
        $o->set_cedula($_POST['cedula']); 
        echo  $o->consultatr();  
      }

      elseif($accion=='eliminar'){
        $o->set_cedula($_POST['cedula']);
        echo  json_encode($o->eliminar());
      }

      else{

          $o->set_cedula($_POST['cedula']);
          $o->set_priNombre($_POST['priNombre']);
          $o->set_segNombre($_POST['segNombre']);
          $o->set_priApellido($_POST['priApellido']);
          $o->set_segApellido($_POST['segApellido']);
          $o->set_usuario($_POST['usuario']);
          $o->set_contraseña($_POST['contraseña']);
        
          if($accion=='incluir'){
            echo  json_encode($o->incluir());
            }
            elseif($accion=='modificar'){
            echo  json_encode($o->modificar());
            }
      }
      
      exit;
    }

    require_once("vista/".$pagina.".php");
  }
else{
    echo "PAGINA EN DESARROLLO.";
}


?>