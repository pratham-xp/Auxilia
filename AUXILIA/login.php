
<?php
  include_once 'header.php' ;
?>
<script>
window.localStorage.clear();
</script>

<section id="login_page">

<div class="login_form">
<h2>LOG IN</h2>
<form class="input-group" action="includes/login.inc.php" method="post">

    <input type="text" class="input-field" name="uid" placeholder="Email/Username">
    <input type="password" class="input-field" name="pwd" placeholder="Password">
    <button type="submit" class="submit-btn" name="submit">LOG IN</button>

</form>
</div>
<?php
  if (isset($_GET["error"]))
  {
    if ($_GET["error"] == "emptyinput")
    {

      echo '<div class="errors1">Fill in all the fields!</div>';
    }
    else if ($_GET["error"] == "wronglogin")
    {
      echo '<div class="errors">Incorrect Username or Password!</div>';
    }
  }
?>
</section>


  <?php
    include_once 'footer.php' ;
  ?>
