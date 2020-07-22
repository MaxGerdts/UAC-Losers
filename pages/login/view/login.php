<?php 
include("../view/partials/head.php");
?>
<body>
<div id="login-button">
  <img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
  </img>
</div>
<div id="container">
  <h1>Sign In</h1>
  <span class="close-btn">
      <!-- esto se va cambiar con una propia -->
    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
  </span>

  <form id="loginForm" action="validateCode.php" method="POST">
    <input type="text" name="txtUser" id="user" autofocus required placeholder="User">
    <input type="password" name="txtPassword" id="password" required placeholder="Password">
  <!-- <a type="submit" href="#">Log in</a>  -->
 <button type="submit" class="btn-btnlogin"> Log in</button> 
    <div id="remember-container">
      <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
      <span id="remember">Remember me</span>
      <span id="forgotten">Forgotten password</span>
    </div>
</form>
</div>

<!-- Forgotten Password Container -->
<div id="forgotten-container">
   <h1>Forgotten</h1>
  <span class="close-btn">
    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
  </span>

  <form>
    <input type="email" name="email" placeholder="E-mail">
    <a href="#" class="orange-btn">Get new password</a>
</form>
</div>
<script  src="../../../assets/js/jquery-3.5.1.min.js"></script>
<script  src="../../../assets/js//jquery-ui.min.js"></script>
<script  src="../../../assets/js/overhang.min.js"></script>
<script  src="../../../assets/js/javasp.js"></script>
<script  src="../../../assets/js/app.js"></script>
</body>



<?php 
include("../view/partials/footer.php");
?>
