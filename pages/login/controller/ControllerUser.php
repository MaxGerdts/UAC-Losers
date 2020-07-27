<?php
include '../data/UserDao.php';

class ControllerUser{

    public static function login($user,$password){
        $obj_user = new User;
        $obj_user->setUser($user);
        $obj_user->setPassword($password);
        return UserDao::login($obj_user);
    }

    public static function gettingUser($user, $password){
        $obj_user = new User;
        $obj_user->setUser($user);
        $obj_user->setPassword($password);
        return UserDao::gettingUser($obj_user);
    }

    public static function registration($name, $email, $user, $password, $privilege){
        $obj_user = new User;
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $obj_user->setName($name);
        $obj_user->setUser($user);
        $obj_user->setEmail($email);
        $obj_user->setPrivilege($privilege);
        $obj_user->setPassword($hash);


        return UserDao::registration($obj_user);
    }

}
