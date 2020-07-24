<?php

class userClass{
  /* User Login */
  public function userLogin($usernameEmail,$password){
    try{
      $db = getDB();
      $hash_password= hash('sha256', $password); //Password encryption
      $stmt = $db->prepare("SELECT id FROM users WHERE (email=:usernameEmail) AND password=:hash_password");
      $stmt->bindParam("usernameEmail", $usernameEmail,PDO::PARAM_STR) ;
      $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
      $stmt->execute();
      $count=$stmt->rowCount();
      $data=$stmt->fetch(PDO::FETCH_OBJ);
      $db = null;
      if($count){
        $_SESSION['id']=$data->id; // Storing user session value
        return true;
      }else{
        return false;
      }
    }
    catch(PDOException $e){
      echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
  }
  /* User Registration */
  public function userRegistration($password,$email,$name){
    try{
      $db = getDB();
      $st = $db->prepare("SELECT id FROM users WHERE email=:email");
      $st->bindParam("email", $email,PDO::PARAM_STR);
      $st->execute();
      $count=$st->rowCount();
      if($count<1){
        $stmt = $db->prepare("INSERT INTO users(password,email,name) VALUES (:hash_password,:email,:name)");
        $hash_password= hash('sha256', $password); //Password encryption
        $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
        $stmt->bindParam("email", $email,PDO::PARAM_STR) ;
        $stmt->bindParam("name", $name,PDO::PARAM_STR) ;
        $stmt->execute();
        $id=$db->lastInsertId(); // Last inserted row id
        $db = null;
        $_SESSION['id']=$id;
        return true;
      }else{
        $db = null;
        return false;
      }
    }
    catch(PDOException $e){
      echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
  }

  /* User Details */
  public function userDetails($id){
    try{
      $db = getDB();
      $stmt = $db->prepare("SELECT email,name FROM users WHERE id=:id");
      $stmt->bindParam("id", $id,PDO::PARAM_INT);
      $stmt->execute();
      $data = $stmt->fetch(PDO::FETCH_OBJ); //User data
      return $data;
    }
    catch(PDOException $e) {
      echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
  }
}
?>
