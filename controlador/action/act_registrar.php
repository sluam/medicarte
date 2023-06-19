<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/usuario.php");
    
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $telefono=$_POST["telefono"];
    $direccion=$_POST["direccion"];
    $cedula=$_POST["cedula"];
    $password=$_POST["password"];
    $edad=$_POST["edad"];
    $correo=$_POST["correo"];
    $rol=$_POST["rol_idrol"];
    $eps=$_POST["eps_ideps"];    
        
                
        $usuarioExistente = buscarUsuarioPorCedula($cedula);
        


        if($usuarioExistente) {
            $mensaje = "¡Usuario ya existe!";
            
        }else{
          
            $usuario = new Usuario($nombre, $apellido, $telefono,$direccion,$cedula,$password,1,$edad,$correo,$rol,$eps);
            $registro = insertarUsuario($usuario);
        
            $mensaje = "¡Usuario ingresado con exito!";
           

        }
        echo "<script>alert('$mensaje'); window.location.href = '../../vista/dashboardAdmin.php';</script>";
           
?>
            
        