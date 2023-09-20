<?php

include_once("modelo/sesion.php");
include_once("modelo/usuario.php");

$userSession = new UserSession();
$user= new inicio();

if(isset($_SESSION['user'])){
/* echo "Hay sesion"; */
$user->setUser($userSession->getActiUser());
    include_once('vista/menu.php');
}
else if(isset($_POST['usuario']) && isset($_POST['contraseña'])){
    /* echo "validacion de sesion"; */

    $userForm=$_POST['usuario'];
    $passForm= $_POST['contraseña'];

    if($user->usuarioExiste($userForm, $passForm)){
        /* echo "usuario validado"; */
        $userSession->setActiUser($userForm);
        $pagina="menu";
    }
    else{
        /* echo "usuario sin validar"; */
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once("vista/inicio.php");
    }
}
else{
    /* echo "login"; */
    include_once("vista/inicio.php");
}
?>