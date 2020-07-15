<?php

include '../controller/ControllerUser.php';


if(isset($_POST["user"]) && isset($_POST["password"])) {

    $txtUser = $_POST["txtUser"];
    $txtPassword = $_POST["txtPassword"];

    if(ControllerUser::login($txtUser, $txtPassword)) {
            echo "logeado";

    }

}

echo "No Registrado";
