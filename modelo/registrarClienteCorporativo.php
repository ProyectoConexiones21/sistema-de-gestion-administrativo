<?php

require_once('modelo/datos.php');

class registrarClienteCorporativo extends datos{

    private $rif;
    private $nombreEmpresa;
    private $priNombre;
    private $segNombre;
    private $priApellido;
    private $segApellido;
    private $cedula;
    private $direccion;
    private $telefono;
    private $correo;

    //---------------------------SET---------------------------

    function set_rif($valor){
        $this->rif=$valor;
    }

    function set_nombreEmpresa($valor){
        $this->nombreEmpresa=$valor;
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

    function get_rif(){
        return $this->rif;
    }

    function get_nombreEmpresa(){
        return $this->nombreEmpresa;
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