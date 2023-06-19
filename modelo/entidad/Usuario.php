<?php
/**
 * Usuario
 */
class Usuario
{
    private $nombre;
    private $apellido;
    private $telefono;
    private $direccion;
    private $cedula;
    private $password;
    private $estado;
    private $edad;
    private $correo;
    private $rol_idrol;

    public $eps_ideps;

    public function __construct($nombre, $apellido, $telefono, $direccion, $cedula, $password, $estado, $edad, $correo, $rol_idrol, $eps_ideps)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->cedula = $cedula;
        $this->password = $password;
        $this->estado = $estado;
        $this->edad = $edad;
        $this->correo = $correo;
        $this->rol_idrol = $rol_idrol;
        $this->eps_ideps = $eps_ideps;
    }







    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     */
    public function setApellido($apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of telefono
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     */
    public function setTelefono($telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     */
    public function setDireccion($direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of cedula
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set the value of cedula
     */
    public function setCedula($cedula): self
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado($estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     */
    public function setEdad($edad): self
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of correo
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set the value of correo
     */
    public function setCorreo($correo): self
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get the value of rol_idrol
     */
    public function getRolIdrol()
    {
        return $this->rol_idrol;
    }

    /**
     * Set the value of rol_idrol
     */
    public function setRolIdrol($rol_idrol): self
    {
        $this->rol_idrol = $rol_idrol;

        return $this;
    }

    /**
     * Get the value of eps_ideps
     */
    public function getEpsIdeps()
    {
        return $this->eps_ideps;
    }

    /**
     * Set the value of eps_ideps
     */
    public function setEpsIdeps($eps_ideps): self
    {
        $this->eps_ideps = $eps_ideps;

        return $this;
    }
}

class Paciente extends Usuario
{
    private $fecha;

    public function __construct($nombre, $apellido, $telefono, $direccion, $cedula, $password, $estado, $edad, $correo, $rol_idrol, $eps_ideps, $fecha)
    {
        parent::__construct($nombre, $apellido, $telefono, $direccion, $cedula, $password, $estado, $edad, $correo, $rol_idrol, $eps_ideps);
        $this->fecha = $fecha;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
}



/* clase administrado y llamando al padre */
class Administrador extends Usuario
{
    private $experiencia;

    public function __construct($nombre, $apellido, $telefono, $direccion, $cedula, $password, $estado, $edad, $correo, $rol_idrol, $eps_ideps, $experiencia)
    {
        parent::__construct($nombre, $apellido, $telefono, $direccion, $cedula, $password, $estado, $edad, $correo, $rol_idrol, $eps_ideps);
        $this->experiencia = $experiencia;
    }




    public function getExperiencia()
    {
        return $this->experiencia;
    }

    public function setExperiencia($experiencia)
    {
        $this->experiencia = $experiencia;
    }
}



class Medico extends Usuario
{
    private $especialidad;

    public function __construct($nombre, $apellido, $telefono, $direccion, $cedula, $password, $estado, $edad, $correo, $rol_idrol, $eps_ideps, $especialidad)
    {
        parent::__construct($nombre, $apellido, $telefono, $direccion, $cedula, $password, $estado, $edad, $correo, $rol_idrol, $eps_ideps);
        $this->especialidad = $especialidad;
    }

    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;
    }
}