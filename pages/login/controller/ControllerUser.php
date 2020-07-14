<?php
include '../data/UserDao.php';

class ControllerUser{

    public static function login($user,$password){
        $obj_user = new User;
        $obj_user->setUser($user);
        $obj_user->setPassword($password);

        return UsuarioDao::login($obj_user);
    }
}
