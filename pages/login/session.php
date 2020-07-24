<?php
if(!empty($_SESSION['id'])){
  $session_uid=$_SESSION['id'];
  include('config.php');
  $userClass = new userClass();
}
if(empty($session_uid)){
  $url='index.php';
  header("Location: $url");
}
 ?>
