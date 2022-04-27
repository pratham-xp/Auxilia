<?php
  include_once 'header.php' ;
  if (!isset($_SESSION["useruid"])){
  header("Location: index.php");
  }
  include 'includes/dbh.inc.php';

?>
  <section id="food-page">

  <div class="donate_form">
  <h2>REQUEST FOOD</h2>
  <form class="input-group" method="post">
      <div>Enter the type of food you would like to request</div>
      <input type="text" class="input-field" name="foodtype" placeholder="Type of food">
      <div>Enter the quantity of food</div>
      <input type="text" class="input-field" name="Quantity" placeholder="Quantity of food">
      <div>Enter your location</div>
      <input type="text" class="input-field" name="location" placeholder="Location">
      <div class="dn-div"> Comments </div>
      <input type="text" class="input-field" name="note" placeholder="Comment">
      <div>Date</div>
      <input type="date" name="donodate" value="2021-07-22" min="2021-01-01" max="2022-12-31">
      <button type="submit" class="submit-btn" name="submit">REQUEST</button>
  </form>
  </div>

  <?php
  if (isset($_POST["submit"]))
{

  $donoid= $_SESSION["useruid"];
  $dononame= $_SESSION["usename"];
  $quantity= $_POST["Quantity"];
  $locate= $_POST["location"];
  $ftype= $_POST["foodtype"];
  $comment = $_POST["note"];
  $ddate = $_POST["donodate"];
  $sql = "INSERT INTO food (ruserid, rname, foodtype, quantity, rlocation, comments, rdate) VALUES(?, ?, ?, ?, ?, ?, ?); ";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql))
  {
    header("location: ../signup.php?error=stmtfailed");
    exit();

  }
  mysqli_stmt_bind_param($stmt, "sssssss", $donoid, $dononame, $ftype, $quantity, $locate, $comment, $ddate);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
?>
 <script>
          swal({
          title: "<?php echo "successfully, requested $ftype !" ;?>",
          text: "<?php echo "Thank you for using Auxilia,$dononame" ;?>",
          icon: "success",
          button: "Close",
          });
        </script>
        <?php
    }
    ?>
</section>

<?php
  include_once 'footer.php' ;
?>