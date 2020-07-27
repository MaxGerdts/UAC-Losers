<?php
include("../view/partials/head.php");
?>

<body>
    <div class="overlay">
        <!-- LOGN IN FORM -->
        <form action="registrationCode.php" method="POST" role="form">
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

                    <!--   user  -->
                    <span class="input-item">
                        <i class="fas fa-users"></i>
                    </span>
                    <!--   user Input-->
                    <input class="form-input" type="text" name="txtUser" id="user" autofocus required placeholder="User">

                    <br>

                     <!--   user email -->
                     <span class="input-item">
                        <i class="fas fa-users"></i>
                    </span>
                    <!--   user email Input-->
                    <input class="form-input" type="email" name="txtEmail" id="email" autofocus required placeholder="Email">

                    <br>
                    <!--   Password -->
                    <!--   Password Input-->
                    <input class="form-input" type="password" name="txtPassword" id="password" required placeholder="Password">

                    <br>

                
                    <!--        buttons -->
                    <!--      button LogIn -->
                    <button class="log-in" type="submit" class="btn-btnlogin" > Create account </button>
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