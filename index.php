<?php 
  if(!isset($_SESSION)) session_start();
  require_once('src/layout/header.php') 
?>
<nav>
  <div class="links">
    <i class="fas fa-apple-alt"></i>
    <p>Gezondheids meter</p>
  </div>
  <div class="rechts">
  <ul>
    <li><a href="/login.php">Login</a></li>
  </ul>
  </div>
</nav>
<div class="content">
  <img class="background" src="src/images/background_image.jpg" alt="">
</div>
<?php require_once('src/layout/footer.php') ?>