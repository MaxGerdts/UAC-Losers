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
                    <h2>Forget Password</h2>
                    <!--     A welcome message or an explanation of the login form -->
                    <p>Type your email here to recover your account</p>
                </header>
                <!--     End  header Content  -->
                <br>
                <div class="field-set">

                    <!--   user email -->
                    <span class="input-item">
                        <i class="fas fa-users"></i>
                    </span>
                    <!--   user email Input-->
                    <input class="form-input" type="text" name="txtEmail" id="email" autofocus required placeholder="Email">

                    <br>

                    <!--        buttons -->
                    <!--      button forgetTo -->
                    <button class="log-in" type="submit" class="btn-btnlogin" id="btnForget"> Recover </button>
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