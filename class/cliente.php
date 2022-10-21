<?php


class cliente
{
    private $rut;
    private $nombre;
    private $apellido;
    private $nacionalidad;
    private $edad;
    private $sexo;
    private $celular;
    private $correo;
    private $Login;
    private $password;

    function __construct($rut, $nombre, $apellido, $nacionalidad, $edad, $sexo, $celular, $correo, $Login, $password)
    {
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nacionalidad = $nacionalidad;
        $this->edad = $edad;
        $this->sexo = $sexo;
        $this->celular = $celular;
        $this->correo = $correo;
        $this->Login = $Login;
        $this->password = $password;
    }

    function getRut()
    {
        return $this->rut;
    }
    function getNombre()
    {
        return $this->nombre;
    }
    function getApellido()
    {
        return $this->apellido;
    }
    function getNacionalidad()
    {
        return $this->nacionalidad;
    }
    function getEdad()
    {
        return $this->edad;
    }
    function getSexo()
    {
        return $this->sexo;
    }
    function getCelular()
    {
        return $this->celular;
    }
    function getCorreo()
    {
        return $this->correo;
    }
    function getLogin()
    {
        return $this->Login;
    }
    function getPassword()
    {
        return $this->password;
    }
}
