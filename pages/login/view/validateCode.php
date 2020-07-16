<?php

include '../controller/ControllerUser.php';
include '../../helps/helps.php';

session_start();


header('Content-type: application/json');
$result = array();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["txtUser"]) && isset($_POST["txtPassword"])) {

        $txtUser = validar_campo($_POST["txtUser"]);
        $txtPassword = validar_campo($_POST["txtPassword"]);
    
            $resultado = array("status" => "true");
    
        if(ControllerUser::login($txtUser, $txtPassword)) {
              return print(json_encode($resultado));
              $user = ControllerUser::gettingUser($txtUser, $txtPassword);
                 $_SESSION["user"] = array(
                     "id"          => $user->getId(),
                     "name"          => $user->getName(),
                     "user"          => $user->getUser(),
                     "email"          => $user->getEmail(),
                     "privilegio"          => $user->getPrivilege(),

                 );
        }
    }
    
}
$resultado = array("status" => "false");
return print(json_encode($resultado));