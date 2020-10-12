<?php 
  if(!isset($_SESSION)) session_start();
  require_once('src/layout/header.php');
  include('src/layout/server.php');
?>
<nav>
  <div class="links">
    <i class="fas fa-apple-alt"></i>
    <p>Gezondheids meter</p>
  </div>
  <div class="rechts">

  </div>
</nav>
<div class="content"> 
    <br>
   
<div class="header">
        <h2>Dashboard</h2>
    </div>
    <?php if(isset($_SESSION['success'])):?>
        <div class="error success">
            <h3>
                <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif?>
        <?php if(isset($_SESSION["username"])):?>
            <p>Welkom <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="login.php?loguit='1'" style="color: red;">Uitloggen</a></p>
        <?php endif ?>
</div>
<?php require_once('src/layout/footer.php') ?>