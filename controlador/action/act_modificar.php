<?php
session_start();

require_once (__DIR__."/../mdb/mdbUsuario.php");
require_once (__DIR__."/../../modelo/entidad/usuario.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$cedula = $_POST["cedula"];
$password = $_POST["password"];
$edad = $_POST["edad"];
$correo = $_POST["correo"];
$rol = $_POST["rol_idrol"];
$eps = $_POST["eps_ideps"];

$usuario = buscarUsuarioPorCedula($cedula);

if ($usuario) {
    $usuario->setNombre($nombre);
    $usuario->setApellido($apellido);
    $usuario->setTelefono($telefono);
    $usuario->setDireccion($direccion);
    $usuario->setPassword($password);
    $usuario->setEdad($edad);
    $usuario->setCorreo($correo);
    $usuario->setRolIdrol($rol);
    $usuario->setEpsIdeps($eps);

    $resultado = modificarUsuario($usuario);

    if ($resultado) {
        $mensaje = "Usuario modificado correctamente";
    } else {
        $mensaje = "Error al modificar el usuario";
    }
} else {
    $mensaje = "Usuario no encontrado";
}

echo "<script>alert('$mensaje'); window.location.href = '../../vista/dashboardAdmin.php';</script>";
?>

            
        