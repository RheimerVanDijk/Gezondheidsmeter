<?php 
  if(!isset($_SESSION)) session_start();
  require_once('src/layout/header.php');
  echo $_SESSION["loggedIn"];
?>
<?php if($_SESSION['loggedIn']) { ?>
<nav>
  <div class="links">
    <i class="fas fa-apple-alt"></i>
    <p>Gezondheids meter</p>
  </div>
  <div class="rechts">
    <a href="logout.php">logout</a>
  </div>
</nav>
<div class="content"> 

    <div class="header">
    <h2>Dashboard</h2>
    </div>
</div>

<?php } else { header("Location: index.php"); } ?>
<?php require_once('src/layout/footer.php') ?>