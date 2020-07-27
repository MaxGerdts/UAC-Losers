<?php
include("../view/partials/head.php");
?>

<body>
   <div class="overlay">
      <!-- LOGN IN FORM by Omar Dsoky -->
      <form id="loginForm" action="validateCode.php" method="POST">
         <!--   con = Container  for items in the form-->
         <div class="con">
            <!--     Start  header Content  -->
            <header class="head-form">
               <h2>Log In</h2>
               <!--     A welcome message or an explanation of the login form -->
               <p>login here using your username and password</p>
            </header>
            <!--     End  header Content  -->
            <br>
            <div class="field-set">

               <!--   user name -->
               <span class="input-item">
                  <i class="fas fa-users"></i>
               </span>
               <!--   user name Input-->
               <input class="form-input" type="text" name="txtUser" id="user" autofocus required placeholder="User">

               <br>

               <!--   Password -->


               <!--   Password Input-->
               <input class="form-input" type="password" name="txtPassword" id="password" required placeholder="Password">

               <br>
               <!--        buttons -->
               <!--      button LogIn -->
               <button class="log-in" type="submit" class="btn-btnlogin" id="btnLogin"> Log In </button>
            </div>

            <!--   other buttons -->
            <div class="other">
               <!--      Forgot Password button-->
               <a href="forget.php" class="btn submits frgt-pass">Forgot Password</a>
               <!--     Sign Up button -->
               <a href="register.php" class="btn submits sign-up">Sign Up </a>
               <!--         Sign Up font icon -->
               <i class="fa fa-user-plus" aria-hidden="true"></i>
               </button>
               <!--      End Other the Division -->
            </div>

            <!--   End Conrainer  -->
         </div>

         <!-- End Form -->
      </form>
   </div>
   <script src="../../../assets/js/jquery-3.5.1.min.js"></script>
   <script src="../../../assets/js//jquery-ui.min.js"></script>
   <script src="../../../assets/js/overhang.min.js"></script>
   <script src="../../../assets/js/app.js"></script>
</body>



<?php
include("../view/partials/footer.php");
?>