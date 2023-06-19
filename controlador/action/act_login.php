<?php

        session_start();
        require_once (__DIR__."/../mdb/mdbUsuario.php");

if (isset($_POST['submit'])) {
        $errMsg = '';
        //username and password sent from Form
        $cedula = $_POST['username'];
        $password = $_POST['password'];

        $usuario = autenticarUsuario($cedula, $password);

        if ($usuario != null) { // Puede iniciar sesión
                $_SESSION['NOMBRE'] = $usuario->getNombre();
                $_SESSION['APELLIDO'] = $usuario->getApellido();
                $_SESSION['TELEFONO'] = $usuario->getTelefono();
                $_SESSION['DIRECCION'] = $usuario->getDireccion();
                $_SESSION['CEDULA'] = $usuario->getCedula();
                $_SESSION['PASSWORD'] = $usuario->getPassword();
                $_SESSION['EDAD'] = $usuario->getEdad();
                $_SESSION['CORREO'] = $usuario->getCorreo();
                $_SESSION['ROL'] = $usuario->getRolIdrol();


                if ($usuario->getRolIdrol() == 1) {
                        echo "<script>
                        alert('INICIO DE SESSION SATISFACTORIO');
                        window.location.href = '../../vista/dashboard.php';
                        </script>";

                } else {
                        if ($usuario->getRolIdrol() == 2) {
                                echo "<script>
                                alert('INICIO DE SESSION SATISFACTORIO');
                                window.location.href = '../../vista/dashboardAdmin.php';
                                </script>";
                        } else {
                                if ($usuario->getRolIdrol() == 3) {
                                        echo "<script>
                                        alert('INICIO DE SESSION SATISFACTORIO');
                                        window.location.href = '../../vista/dashboardMedico.html';
                                        </script>";
                                }
                        }
                }
        } else {
                echo "<script>
                      alert('Usuario o contraseña incorrecta');
                      window.location.href = '../../vista/sesion.php';
                  </script>";
        }
}
?>