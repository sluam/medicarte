<?php


require_once ("DataSource.php");
require_once (__DIR__."/../entidad/Usuario.php");


/**
 * Description of UsuarioDAO
 *
 * @author Admin
 */
class UsuarioDAO
{

    public function autenticarUsuario($user, $pass)
    { // Login
        $data_source = new DataSource();

        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM usuario WHERE cedula = :user AND password = :pass",
            array(':user' => $user, ':pass' => $pass)
        );
        $usuario = null;
        if (count($data_table) == 1) {
            foreach ($data_table as $indice => $valor) {
                $usuario = new Usuario(
                    $data_table[$indice]["nombre"],
                    $data_table[$indice]["apellido"],
                    $data_table[$indice]["telefono"],
                    $data_table[$indice]["direccion"],
                    $data_table[$indice]["cedula"],
                    $data_table[$indice]["password"],
                    $data_table[$indice]["estado"],
                    $data_table[$indice]["edad"],
                    $data_table[$indice]["correo"],
                    $data_table[$indice]["rol_idrol"],
                    $data_table[$indice]["eps_ideps"]
                );
            }
            return $usuario;
        } else {
            return null;
        }
    }

    public function buscarUsuarioPorCedula($cedula)
    {
        $data_source = new DataSource();
        //password_hash("rasmuslerdorf", PASSWORD_DEFAULT)
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM usuario WHERE cedula = :cedula",
            array(':cedula' => $cedula)
        );
        $usuario = null;
        if (count($data_table) == 1) {
            foreach ($data_table as $indice => $valor) {
                $usuario = new Usuario(
                    $data_table[$indice]["nombre"],
                    $data_table[$indice]["apellido"],
                    $data_table[$indice]["telefono"],
                    $data_table[$indice]["direccion"],
                    $data_table[$indice]["cedula"],
                    $data_table[$indice]["password"],
                    $data_table[$indice]["estado"],
                    $data_table[$indice]["edad"],
                    $data_table[$indice]["correo"],
                    $data_table[$indice]["rol_idrol"],
                    $data_table[$indice]["eps_ideps"]

                );
            }
            return $usuario;
        } else {
            return null;
        }
    }


    public function verUsuarios()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario");
        $usuario = null;
        $usuarios = array();
        foreach ($data_table as $indice => $valor) {
            $usuario = new Usuario(
                $data_table[$indice]["nombre"],
                $data_table[$indice]["apeliido"],
                $data_table[$indice]["telefono"],
                $data_table[$indice]["direccion"],
                $data_table[$indice]["cedula"],
                $data_table[$indice]["password"],
                $data_table[$indice]["estado"],
                $data_table[$indice]["edad"],
                $data_table[$indice]["correo"],
                $data_table[$indice]["rol_idrol"],
                $data_table[$indice]["eps_ideps"]

            );
            array_push($usuarios, $usuario);
        }
        return $usuarios;
    }

    public function insertarUsuario(Usuario $usuario)
    {
        $data_source = new DataSource();
        $sql = "INSERT INTO usuario VALUES (:nombre, :apellido,:telefono,:direccion,:cedula,:password,:estado,:edad,:correo,:rol_idrol,:eps_ideps)";
        $resultado = $data_source->ejecutarActualizacion(
            $sql,
            array(
                ':nombre' => $usuario->getNombre(),
                ':apellido' => $usuario->getApellido(),
                ':telefono' => $usuario->getTelefono(),
                ':direccion' => $usuario->getDireccion(),
                ':cedula' => $usuario->getCedula(),
                ':password' => $usuario->getPassword(),
                ':estado' => $usuario->getEstado(),
                ':edad' => $usuario->getEdad(),
                ':correo' => $usuario->getCorreo(),
                ':rol_idrol' => $usuario->getRolIdrol(),
                ':eps_ideps' => $usuario->getEpsIdeps()
            )
        );
        return $resultado;
    }

    public function modificarUsuario(Usuario $usuario)
    {
        $data_source = new DataSource();
        $sql = "UPDATE usuario SET 
        nombre= :nombre, "
            . " username= :username, "
            . " password= :password, "
            . " WHERE id= :id ";
        $resultado = $data_source->ejecutarActualizacion(
            $sql,
            array(
                ':nombre' => $usuario->getNombre(),
                ':apellido' => $usuario->getApellido(),
                ':telefono' => $usuario->getTelefono(),
                ':direccion' => $usuario->getDireccion(),
                ':cedula' => $usuario->getCedula(),
                ':password' => $usuario->getPassword(),
                ':estado' => $usuario->getEstado(),
                ':edad' => $usuario->getEdad(),
                ':correo' => $usuario->getCorreo(),
                ':rol_idrol' => $usuario->getRolIdrol(),
                ':eps' => $usuario->getEpsIdeps()
            )
        );

        return $resultado;
    }

    public function borrarUsuario($cedula)
    {
        $data_source = new DataSource();
        $stmt1 = "DELETE FROM usuario WHERE cedula = :cedula";
        $resultado = $data_source->ejecutarActualizacion(
            $stmt1,
            array(
                ':cedula' => $cedula,
            )
        );
        return $resultado;
    }



}