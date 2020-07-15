<?php

include '../controller/ControllerUser.php';


header('Content-type: application/json');
$result = array();

if(isset($_POST["txtUser"]) && isset($_POST["txtPassword"])) {

    $txtUser = $_POST["txtUser"];
    $txtPassword = $_POST["txtPassword"];

        $resultado = array("status" => "true");

    if(ControllerUser::login($txtUser, $txtPassword)) {
           return print(json_encode($resultado));
    }
}

$resultado = array("status" => "no es este false");
return print(json_encode($resultado));