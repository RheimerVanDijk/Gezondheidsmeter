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
  <ul>
   
  </ul>
  </div>
</nav>
<div class="content">
<div class="header">
        <h2>Login</h2>
    </div>
    <form method="POST" action="login.php">
    <?php include('src/layout/errors.php');?>
    <div class="input-group">
        <label>Volledige naam:</label>
        <input type="text" name="username">
    </div>
    <div class="input-group">
        <label>Wachtwoord:</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" name="login" class="btn">Login</button>
    </div>
    <p>
        Nog geen lid? meld u dan aan <a href="register.php">Registeer</a>
    </p>
    </form>
</div>
<?php require_once('src/layout/footer.php') ?>