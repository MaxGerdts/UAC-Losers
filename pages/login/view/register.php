<?php
include("../view/partials/head.php");
?>

<body>
    <div class="overlay">
        <!-- LOGN IN FORM -->
        <form id="loginForm" action="validateCode.php" method="POST">
            <!--   con = Container  for items in the form-->
            <div class="con">
                <!--     Start  header Content  -->
                <header class="head-form">
                    <h2>Sign Up</h2>
                    <!--     A welcome message or an explanation of the login form -->
                    <p>Type your data to create an account</p>
                </header>
                <!--     End  header Content  -->
                <br>
                <div class="field-set">

                    <!--   user name -->
                    <span class="input-item">
                        <i class="fas fa-users"></i>
                    </span>
                    <!--   user name Input-->
                    <input class="form-input" type="text" name="txtName" id="name" autofocus required placeholder="Name">

                    <br>

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
                    <!--   Password Confirm-->


                    <!--   Password Input-->
                    <input class="form-input" type="password" name="txtPassword" id="password" required placeholder="Password">

                    <br>


                    <!--   user email -->
                    <span class="input-item">
                        <i class="fas fa-users"></i>
                    </span>
                    <!--   user email Input-->
                    <input class="form-input" type="text" name="txtEmail" id="email" autofocus required placeholder="Email">

                    <br>

                    <!--   user email -->
                    <span class="input-item">
                        <i class="fas fa-users"></i>
                    </span>
                    <!--   user name Input-->
                    <input class="form-input" type="text" name="txtEmail" id="email" autofocus required placeholder="Email">

                    <br>
                    <!--        buttons -->
                    <!--      button LogIn -->
                    <button class="log-in" type="submit" class="btn-btnlogin" id="btnLogin"> Create account </button>
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