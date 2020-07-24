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
            $result->bindValue(":user", $user->getUser());
            $result->bindValue(":password", $user->getPassword());

          $result->execute();

          if ($result->rowCount() > 0){
              $rows = $result->fetch();
              if($rows["user"] == $user->getUser()
              && $rows["password"] == $user->getPassword()) {
                  return true;
              }
          }
          return false;
    }

      //Getting user Method (Login)
      public static function gettingUser($user)
      {
           $query = "SELECT id,name,email,user,privilege,registration_date 
           FROM users WHERE user = :user AND password = :password";
  
            self::getConnection();
  
            $result = self::$cnx->prepare($query);
            //Indicate -- column and value --
              $result->bindValue(":user", $user->getUser());
              $result->bindValue(":password", $user->getPassword());
  
            $result->execute();
  
            $rows = $result->fetch();
            $user = new User();
            $user->setId($rows["id"]);
            $user->setName($rows["name"]);
            $user->setUser($rows["user"]);
            $user->setEmail($rows["email"]);
            $user->setPrivilege($rows["privilege"]);
            $user->setRegistration_date($rows["registration_date"]);

            return $user;
      }


      //Validation Method (Registration)
    public static function registration($user)
    {
         $query = "INSERT INTO users (name,user,email,password,privilege) VALUES (:name,:email,:user,:password,:privilege)";
      
      self::getConnection();

      $result = self::$cnx->prepare($query);

      $result->bindValue(":name", $user->getName());
      $result->bindValue(":user", $user->getUser());
      $result->bindValue(":email", $user->getEmail());
      $result->bindValue(":password", $user->getPassword());
      $result->bindValue(":privilege", $user->getPrivilege());

          if($result->execute()) {
            return true;
          }

          return false;

  }

}
