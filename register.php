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
        <h2>Registeer</h2>
    </div>
    <form method="post" action="register.php">
    <?php include('src/layout/errors.php');?>
    <div class="input-group">
        <label>Volledige naam:</label>
        <input type="text" name="username" value="<?php echo $username;?>">
    </div>
    <div class="input-group">
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $email;?>">
    </div>
    <div class="input-group">
        <label>Wachtwoord:</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Bevestig wachtwoord:</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" name="registeer" class="btn">Registeer</button>
    </div>
    <p>
        Bent u al lid? <a href="login.php">Login</a>
    </p>
    </form>
</div>    



<?php require_once('src/layout/footer.php') ?>