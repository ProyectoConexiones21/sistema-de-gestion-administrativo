<?php

require_once('modelo/datos.php');

class registrarUsuario extends datos{

    private $cedula;
    private $priNombre;
    private $segNombre;
    private $priApellido;
    private $segApellido;
    private $usuario;
    private $contraseña;

    //---------------------------SET---------------------------

    function set_cedula($valor){
        $this->cedula=$valor;
    }

    function set_priNombre($valor){
        $this->priNombre=$valor;
    }

    function set_segNombre($valor){
        $this->segNombre=$valor;
    }

    function set_priApellido($valor){
        $this->priApellido=$valor;
    }
    function set_segApellido($valor){
        $this->segApellido=$valor;
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

    function get_priNombre(){
        return $this->priNombre;
    }

    function get_segNombre(){
        return $this->segNombre;
    }

    function get_priApellido(){
        return $this->priApellido;
    }

    function get_segApellido(){
        return $this->segApellido;
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