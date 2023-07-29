<?php

require_once('modelo/datos.php');

class registrarClientePrepago extends datos{

    private $nombre;
    private $apellido;
    private $cedula;
    private $direccion;
    private $telefono;
    private $correo;

    //---------------------------SET---------------------------

    function set_nombre($valor){
        $this->nombre=$valor;
    }

    function set_apellido($valor){
        $this->apellido=$valor;
    }

    function set_cedula($valor){
        $this->cedula=$valor;
    }

    function set_direccion($valor){
        $this->direccion=$valor;
    }
    function set_telefono($valor){
        $this->telefono=$valor;
    }

    function set_correo($valor){
        $this->correo=$valor;
    }

//----------------------------------GET----------------------------------

    function get_nombre(){
        return $this->nombre;
    }

    function get_apellido(){
        return $this->apellido;
    }

    function get_cedula(){
        return $this->cedula;
    }

    function get_direccion(){
        return $this->direccion;
    }
    function get_telefono(){
        return $this->telefono;
    }

    function get_correo(){
        return $this->correo;
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