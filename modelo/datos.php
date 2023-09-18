<?php
class datos{
    private $ip="localhost";
    private $bd="administrador";
    private $usuario="root";
    private $contraseña="";

    function conectar(){
        $pdo = new PDO("mysql:host=".$this->ip.";dbname=".$this->bd."",$this->usuario,$this->contraseña);
        $pdo->exec("set names utf8");
        return $pdo;
    }
    
}
?>