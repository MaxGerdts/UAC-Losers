<?php
include('con.php');
$session_uid='';
$_SESSION['id']='';

if(empty($session_uid) && empty($_SESSION['id'])){
  $url='login.php';
  header("Location: $url");
  //echo "";
}
?>
