<?php
require "../class/DAO.php";

$d = new DAO();
if (isset($_POST["btnIni"])) {

    $log = $_POST["txtusu"];
    $pas = $_POST["txtpas"];
    $objcli = $d->validarlogin($log, $pas);

    if (!is_null($objcli)) {
        session_start();
        $_SESSION["rut"] = $objcli->getRut();
        $_SESSION["nombre"] = $objcli->getNombre();
        $_SESSION["password"] = $objcli->getPassword();
        header("Location: ../indexcli.php");
    } else {
        header("Location: ../login.php?error=1");
    }
}
