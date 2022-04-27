
<?php
  include_once 'header.php' ;
  if (!isset($_SESSION["useruid"])){
  header("Location: index.php");
  }
  include 'includes/dbh.inc.php';

?>
  <section id="donnav-page">

  <div class="donate_form">
  <h2>REQUISITION PAGE</h2>
  <form class="input-group" method="post">
  <button onclick="location.href='recipient.php'" type="button" class="submit-btn" name="submit">REQUEST MONEY</button>
  <button onclick="location.href='food.php'"  type="button" class="submit-btn" name="submit">REQUEST FOOD</button>
  <button onclick="location.href='furniture.php'"  type="button" class="submit-btn" name="submit">REQUEST FURNITURE</button>
  <button onclick="location.href='clothes.php'" type="button" class="submit-btn" name="submit">REQUEST CLOTHES</button>
  </form>
  </div>

</section>

<?php
  include_once 'footer.php' ;
?>
