<?php

require_once('modelo/datos.php');

class inicioSesion extends datos{
    
    private $usuario;
    private $contraseña;

    function set_usuario($valor){
        $this->usuario=$valor;
    }
    function set_contraseña($valor){
        $this->contraseña=$valor;
    }

    function get_usuario(){
        return $this->usuario;
    }
    function get_contraseña(){
        return $this->contraseña;
    }

    function iniciarSesion(){
        return $pagina="menuPrincipal";
    }
}

?>