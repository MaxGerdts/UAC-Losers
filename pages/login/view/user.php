<?php 
include("../view/partials/head.php");
?>
<?php 
/*
session_start();
//Login Validation
if(isset($_SESSION["user"])){
    //Type user validation
        if($_SESSION["user"]["privilege"] == 1){
            header("location:admin.php");
        }
}
// If isnt login redirecting you to login
header("location:login.php");
 */ ?>  
<body>
    <?php if(!isset($_SESSION["user"])) ?>
<h1><strong>Bienvenido a la pagina de la arrechera</strong> 
<?php echo $_SESSION["user"]["name"]; ?>
</h1> 
<p>Panel de control --- <span><?php echo $_SESSION["user"]["privilege"] == 1 ?
 'Admin' : 'Cliente'; ?> </span></p>
    <a href="login.php">Cerrar sesión </a>
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
