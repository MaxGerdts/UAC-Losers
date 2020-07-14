<?php

class Connection{
    // Conexion a la base de datos :D
    public static function connect(){
        try{
            $cn = new PDO("mysql:host=localhost;dbname=login-php");

           return $cn;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}
Connection::connect();
