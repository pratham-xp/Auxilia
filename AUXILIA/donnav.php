
<?php
  include_once 'header.php' ;
  if (!isset($_SESSION["useruid"])){
  header("Location: index.php");
  }
  include 'includes/dbh.inc.php';

?>
  <section id="donnav-page">

  <div class="donate_form">
  <h2>DONATIONS PAGE</h2>
  <form class="input-group" method="post">
  <button onclick="location.href='payment.php'" type="button" class="submit-btn">DONATE MONEY</button>
  <button onclick="location.href='donatefood.php'"  type="button" class="submit-btn">DONATE FOOD</button>
  <button onclick="location.href='donatefurniture.php'"  type="button" class="submit-btn">DONATE FURNITURE</button>
  <button onclick="location.href='donateclothes.php'"  type="button" class="submit-btn">DONATE CLOTHES</button>
  </form>
  </div>

</section>

<?php
  include_once 'footer.php' ;
?>
