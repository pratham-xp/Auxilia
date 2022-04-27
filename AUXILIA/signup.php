<?php
  include_once 'header.php' ;
?>


<section id="login_page">
  <div class="Sign_form">
<h2>SIGN UP</h2>
<form class="input-group" action="includes/signup.inc.php" method="post">
    <input type="text" class="input-field" name="name" placeholder="Full Name">
    <input type="text" class="input-field" name="email" placeholder="Email">
    <input type="text" class="input-field" name="uid" placeholder="User Name">
    <input type="password" class="input-field" name="pwd" placeholder="Password">
    <input type="password" class="input-field" name="pwdrepeat" placeholder="Repeat Password">
    <button type="submit" class="submit-btn" name="submit">SIGN UP</button>

</form>
</div>
<?php
  if (isset($_GET["error"]))
  {
    if ($_GET["error"] == "emptyinput")
    {
      echo '<div class="errors1">Fill in all the fields!</div>';
    }
    else if ($_GET["error"] == "invaliduid")
    {

      echo '<div class="errors">Choose a proper username!</div>';
    }
    else if ($_GET["error"] == "invalidemail")
    {

      echo '<div class="errors2">Choose a proper email!</div>';
    }
    else if ($_GET["error"] == "passwordsdontmatch")
    {
      echo '<div class="errors2">Passwords dont match!</div>';
    }
    else if ($_GET["error"] == "stmtfailed")
    {
      echo '<div class="errors2">Something went wrong, try again! (stmt prepared statement failed/rejected by sql)</div>';
    }
    else if ($_GET["error"] == "usernametaken")
    {
      echo '<div class="errors">Username already exists, Choose another username!</div>';

    }
    else if ($_GET["error"] == "none")
    {
      echo '<div class="errors1">Successfully Registered!</div>';
    }
  }
?>
</section>



  <?php
    include_once 'footer.php' ;
  ?>
