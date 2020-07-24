<?php
include('../login/con.php');
include('../login/session.php');

$userDetails=$userClass->userDetails($session_uid);
?>
<?php include('../includes/header.php'); ?>
    <div class="container">
      <div class="content content-white mw-767 br bl">
        <img src="../assets/img/Lanhita.jpg" alt="">
        <p class="font-lg text-center">Lanita</p>
      </div>
      <div class="content content-primary mw-767">
        <ul class="list flex menu-profile">
          <li class="list-items list-items-white pointer">Biografía</li>
          <li class="list-items list-items-white pointer">Información</li>
          <li class="list-items list-items-white pointer">Packs</li>
          <li class="list-items list-items-white pointer">Chats hots</li>
          <li class="list-items list-items-white"><a class="link-white" href="#">Editar perfil</a></li>
          <h4><a href="../login/logout.php">Logout</a></h4>
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="content content-white mw-767 content-info border br-8">
        Me llamo lana y me gusta el sexo casual, si me gustas te culeo. Tengo 19 años y culeo desde los 14. Me gustan las vergas pequeñas y gruesas.
      </div>
      <div class="content content-white mw-767 content-info border br-8">
        Soy de malambo y vivo con mis tres hijos, si te intereso llamame sin compromiso +57 304 3654831
      </div>
      <div class="content content-white mw-767 content-info border br-8">
        <img src="../assets/img/pack1.jpg" alt="">
      </div>
      <div class="content content-white mw-767 content-info border br-8">
        Chats hots
      </div>
    </div>
<?php include('../includes/footer.php'); ?>
