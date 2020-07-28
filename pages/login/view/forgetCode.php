<?php

include '../controller/ControllerUser.php';
include '../../helps/helps.php';

$result = array();
$errors = array();

if($_SERVER["REQUEST_METHOD"] == "POST"){
 

    if(isset($_POST["txtEmail"])){

      $txtEmail = validar_campo($_POST["txtEmail"]);
                 
      if(ControllerUser::verifyEmail($txtEmail)) {
                     $user = ControllerUser::verifyEmail($txtEmail);
                     $_SESSION["user"] = array(
                          "id"          => $id->getId(),
                          "name"          => $name->getName(),
                          "email"        => $email->getEmail()

                        ); 

                        return print(json_encode($result));

                        $url = "";
                        $asunto = "";
                        $cuerpo = "Hola $name: <br /><br /> Se ha solicitado un reinicio de contrasena. <br/><br/>
                         Para restaurar la contrasena haga click en el siguiente link: <a href='$url'>$url</a>";

                         header("location:index.php");
               } else{ 
                  $errors[] = "This Email is not exist in this app";
               }   

         }  $errors[] = "You must type a Syntax Correct Email";

}
