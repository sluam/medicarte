<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbUsuario.php');
    
    $idUsuario = $_POST['idUsuario'];

    $usuario = verUsuarios($idUsuario);
    
    echo json_encode($usuario);  