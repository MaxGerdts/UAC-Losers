<?php

include '../controller/ControllerUser.php';
include '../../helps/helps.php';

header('Content-type: application/json');
$result = array();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["txtUser"]) && isset($_POST["txtPassword"])) {

        $txtUser = validar_campo($_POST["txtUser"]);
        $txtPassword = validar_campo($_POST["txtPassword"]);
    
            $resultado = array("status" => "true");
    
        if(ControllerUser::login($txtUser, $txtPassword)) {
              // return print(json_encode($resultado));
            
              $user = ControllerUser::getUser($txtUser, $txtPassword);
              echo $user->getName();
    
        }
    }
    
}
$resultado = array("status" => "no es este false");
return print(json_encode($resultado));