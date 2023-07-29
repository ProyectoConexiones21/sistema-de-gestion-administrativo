<?php

require_once('modelo/datos.php');

class registrarUsuario extends datos{

    private $cedula;
    private $nombre;
    private $apellido;
    private $usuario;
    private $contraseña;

    //---------------------------SET---------------------------

    function set_cedula($valor){
        $this->cedula=$valor;
    }

    function set_nombre($valor){
        $this->nombre=$valor;
    }

    function set_apellido($valor){
        $this->apellido=$valor;
    }

    function set_usuario($valor){
        $this->usuario=$valor;
    }
    function set_contraseña($valor){
        $this->contraseña=$valor;
    }

//----------------------------------GET----------------------------------

    function get_cedula(){
        return $this->cedula;
    }

    function get_nombre(){
        return $this->nombre;
    }

    function get_apellido(){
        return $this->apellido;
    }

    function get_usuario(){
        return $this->usuario;
    }
    function get_contraseña(){
        return $this->contraseña;
    }

    function guardar(){
		
		return "";
	}
	
	function modificar(){
		
        return "";
	}
	
	function eliminar(){
		
        return "";
	}
    
}



?>