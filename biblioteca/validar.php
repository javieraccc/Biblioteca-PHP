<?php

session_start();
if(isset($_SESSION['usuarioLogin'])){
    header('location: principal.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    require 'conexionManager.php';    
    
    $consulta = $conexion ->prepare('SELECT * FROM usuario_sistema WHERE username =:usuario AND password=:password');
    $consulta ->execute(array(':usuario'=>$usuario, ':password'=>$password));
    
    $resultado = $consulta ->fetch();
    if($resultado!==false){
        $_SESSION['usuarioLogin'] = $usuario;
        header('location: principal.php');
    }else{
        header('location: index.php');

    }
}

?>

