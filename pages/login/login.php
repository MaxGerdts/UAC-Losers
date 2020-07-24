<?php
include("con.php");
include('config.php');
$userClass = new userClass();

$errorMsgReg='';
$errorMsgLogin='';
/* Login Form */
if (!empty($_POST['loginSubmit'])){
  $usernameEmail=$_POST['usernameEmail'];
  $password=$_POST['password'];
  if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 ){
    $id=$userClass->userLogin($usernameEmail,$password);
    if($id){
      $url='../admin/profile.php';
      header("Location: $url"); // Page redirecting to profile.php
    }else{
      $errorMsgLogin="Please check login details.";
    }
  }
}
?>

<?php include('../includes/header.php'); ?>
  <div class="container-primary flex mih-100">
    <div class="content content-primary maw-450">
      <h2 class="font-quaternary text-center">Iniciar sesión</h2>
      <form method="post" action="" name="login">
        <p class="font-quaternary font-weight-bold mg-0">Correo electrónico</p>
        <input type="text" class="input-primary" name="usernameEmail" placeholder="Ingrese correo electrónico" required autofocus/>
        <p class="font-quaternary font-weight-bold mg-0">Contraseña</p>
        <input type="password" class="input-primary" name="password" placeholder="Ingrese contraseña" required/>
        <div class="errorMsg"><?php echo $errorMsgLogin; ?></div>
        <input type="submit" class="btn-secondary" name="loginSubmit" value="Iniciar sesión">
        <a class="d-block font-tertiary text-center font-weight-bold" href="#">¿Olvidaste la contraseña?</a>
        <div class="text-center">
          <span class="font-tertiary font-weight-bold">¿No tienes cuenta? </span>
          <a class="font-primary font-weight-bold" href="signin.php">Registrate ahora</a>
        </div>
      </form>
    </div>
  </div>
<?php include('../includes/footer.php'); ?>
