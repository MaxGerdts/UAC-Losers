<?php

include 'Connection.php';
include '../entities/User.php';

// Data Acess Object
class UserDao extends Connection{


    protected static $cnx;

    private static function getConnection(){
        self::$cnx = Connection::connect();
    }

    private static function disconnect(){
        self::$cnx = null;
    }

    //Validation Method (Login)
    public static function login($user)
    {
         $query = "SELECT * FROM users WHERE user = :user AND password = :password";

          self::getConnection();

          $result = self::$cnx->prepare($query);
          //Indicate -- column and value --
          $result->bindParam(":user", $user->getUser());
          $result->bindParam(":password", $user->getPassword());

          $result->execute();
          
          if (count($result->rowCount() > 0)){
              $rows = $result->fetch();
              if($rows["user"] == $user->getUser()
              && $rows["password"] == $user->getPasword()) {
                  return true;
              }
          }
          return false;
    }
}