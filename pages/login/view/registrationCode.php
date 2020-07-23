<?php

include '../controller/ControllerUser.php';
include '../../helps/helps.php';

session_start();



if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["txtName"]) && 
    isset($_POST["txtUser"]) && 
    isset($_POST["txtEmail"]) && 
    isset($_POST["txtPassword"])) {

        $txtName = validar_campo($_POST["txtName"]);
        $txtUser = validar_campo($_POST["txtUser"]);
        $txtEmail = validar_campo($_POST["txtEmail"]);
        $txtPassword = validar_campo($_POST["txtPassword"]);
        $txtPrivilege = 2;
    
    
        if(ControllerUser::registration($txtName, $txtUser, $txtEmail, $txtPassword, $txtPrivilege)) {
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
    
} 
    header("location:registration.php?error=1"); 


