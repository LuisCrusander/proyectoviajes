<?php
require 'cliente.php';
class DAO
{
    private $mi;
    private function conexion()
    {

        $this->mi = new mysqli("localhost", "root", "", "viaje");

        if ($this->mi->connect_errno) {
            die("Error: " . $this->mi->connect_errno);
        }
    }


    private function desconexion()
    {
        $this->mi->close();
    }


    public function validarlogin($log, $pas)
    {
        $this->conexion();
        $sql = "select * from cliente where login='$log' and password='$pas'";
        $ejecutar = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($ejecutar)) {
            $rut = $rs["rut"];
            $nombre = $rs["nombre"];
            $apellido = $rs["apellido"];
            $nacionalidad = $rs["nacionalidad"];
            $edad = $rs["edad"];
            $sexo = $rs["sexo"];
            $celular = $rs["celular"];
            $correo = $rs["correo"];
            $login = $rs["login"];
            $password = $rs["password"];
            $cli = new cliente($rut, $nombre, $apellido, $nacionalidad, $edad, $sexo, $celular, $correo, $login, $password);
            $this->desconexion();
            return $cli;
        }
        $this->desconexion();
        return null;
    }
}
