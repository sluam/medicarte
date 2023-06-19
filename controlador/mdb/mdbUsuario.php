<?php
require_once(__DIR__."/../../modelo/DAO/UsuarioDAO.php");


function autenticarUsuario($username, $password)
{

    $dao = new UsuarioDAO();
    $usuario = $dao->autenticarUsuario($username, $password);
    return $usuario;
}

function buscarUsuarioPorCedula($username)
{

    $dao = new UsuarioDAO();
    $usuario = $dao->buscarUsuarioPorCedula($username);
    return $usuario;
}

function verUsuarios()
{

    $dao = new UsuarioDAO();
    $usuarios = $dao->verUsuarios();
    return $usuarios;
}


function insertarUsuario($usuario)
{

    $dao = new UsuarioDAO();
    $resultado = $dao->insertarUsuario($usuario);
    return $resultado;
}

function modificarUsuario($usuario)
{

    $dao = new UsuarioDAO();
    $resultado = $dao->modificarUsuario($usuario);
    return $resultado;
}

function borrarUsuario($id)
{

    $dao = new UsuarioDAO();
    $res = $dao->borrarUsuario($id);
    return $res;
}