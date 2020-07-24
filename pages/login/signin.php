<?php
include("con.php");
include('config.php');
$userClass = new userClass();

$errorMsgReg='';
$errorMsgLogin='';

/* Signup Form */
if (!empty($_POST['signupSubmit'])){
  $email=$_POST['emailReg'];
  $password=$_POST['passwordReg'];
  $name=$_POST['nameReg'];
/* Regular expression check */
  $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.([a-zA-Z]{2,4})$~i', $email);
  $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

  if($email_check && $password_check && strlen(trim($name))>0){
    $id=$userClass->userRegistration($password,$email,$name);
    if($id){
      $url='../admin/profile.php';
      header("Location: $url"); // Page redirecting to profile.php
    }else{
      $errorMsgReg="Username or Email already exists.";
    }
  }
}
 ?>

<?php include('../includes/header.php'); ?>
    <div class="container-primary flex mih-100">
      <div class="content content-primary maw-450">
        <h2 class="font-quaternary text-center">Registrarse</h2>
        <form method="post" action="" name="signup">
          <p class="font-quaternary font-weight-bold mg-0">Nombres</p>
          <input type="text" class="input-primary" name="nameReg" placeholder="Nombres" required autofocus/>
          <p class="font-quaternary font-weight-bold mg-0">Correo electrónico</p>
          <input type="text" class="input-primary" name="emailReg" placeholder="Correo electrónico" required/>
          <p class="font-quaternary font-weight-bold mg-0">Password</p>
          <input type="password" class="input-primary" name="passwordReg" placeholder="Contraseña" required/>
          <div class="errorMsg"><?php echo $errorMsgReg; ?></div>
          <input type="submit" class="btn-secondary" name="signupSubmit" value="Registrarse">
          <div class="text-center">
            <span class="font-tertiary font-weight-bold">¿Ya tienes cuenta? </span>
            <a class="font-primary font-weight-bold" href="login.php">Inicia sesión ahora</a>
          </div>
        </form>
      </div>
    </div>
<?php include('../includes/footer.php'); ?>
