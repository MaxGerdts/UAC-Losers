<?php

include '../controller/ControllerUser.php';
include '../../helps/helps.php';

session_start();



if($_SERVER["REQUEST_METHOD"] == "POST"){
    //print_r($_POST);
    if(isset($_POST["txtName"]) && isset($_POST["txtEmail"]) &&  isset($_POST["txtUser"]) &&  isset($_POST["txtPassword"])) {
        echo 'ok';
        $txtName = validar_campo($_POST["txtName"]);
        $txtEmail = validar_campo($_POST["txtEmail"]);
        $txtUser = validar_campo($_POST["txtUser"]);
        $txtPassword = validar_campo($_POST["txtPassword"]);
        $txtPrivilege = 1;
    
    
        if(ControllerUser::registration($txtName,  $txtEmail, $txtUser, $txtPassword, $txtPrivilege)) {
                $user = ControllerUser::gettingUser($txtUser, $txtPassword);
                 $_SESSION["user"] = array(
                     "id"          => $user->getId(),
                     "name"          => $user->getName(),
                     "user"          => $user->getUser(),
                     "email"          => $user->getEmail(),          
                     "privilege"          => $user->getPrivilege(),
                    
                 );
                
              header("location:admin.php");
        }
    }
    
} else{
    header("location:register.php?error=1");
}

