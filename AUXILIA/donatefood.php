<?php
  include_once 'header.php' ;
  if (!isset($_SESSION["useruid"])){
  header("Location: index.php");
  }
  include 'includes/dbh.inc.php';

?>
  <section id="food-page">

  <div class="donate_form">
  <h2>DONATE FOOD</h2>
  <form class="input-group" method="post">
      <div>Enter the type of food you would like to donate</div>
      <input type="text" class="input-field" name="foodtype" placeholder="Type of food">
      <div>Enter the quantity of food</div>
      <input type="text" class="input-field" name="Quantity" placeholder="Quantity of food">
      <div>Expiry Date or the food is best before</div>
      <input type="date" name="ExpDate" value="2021-07-22" min="2021-01-01" max="2022-12-31">
      <div>Enter pickup location</div>
      <input type="text" class="input-field" name="location" placeholder="Location">
      <div class="dn-div"> Comments </div>
      <input type="text" class="input-field" name="note" placeholder="Comment">
      <div class="dn-div">Recipient</div>
          <div>
          <?php
          $query="SELECT rname,ruserid FROM food WHERE ruserid!='{$_SESSION["useruid"]}'";
          if($r_set = $conn->query($query))
          {
            echo "<select name=recip class='form-control'>";
            while ($row = $r_set->fetch_assoc())
            {
                echo "<option name='recip' value=$row[rname]>$row[rname]</option>";
            }
            echo "</select>";
          }
          else
          {
            echo $conn->error;
          }
          ?>
          </div>
      <div>Date</div>
      <input type="date" name="donodate" value="2021-07-22" min="2021-01-01" max="2022-12-31">
      <button type="submit" class="submit-btn" name="submit">DONATE</button>
  </form>
  </div>

  <?php
  if (isset($_POST["submit"]))
{

  $donoid= $_SESSION["useruid"];
  $dononame= $_SESSION["usename"];
  $rname= $_POST["recip"];
  $expiry= $_POST["ExpDate"];
  $quantity= $_POST["Quantity"];
  $locate= $_POST["location"];
  $ftype= $_POST["foodtype"];
  $comment = $_POST["note"];
  $ddate = $_POST["donodate"];
  $sql = "INSERT INTO donation_food (donorid, donorname, recipientName, foodtype, quantity, expirydate, food_location, comments, donatedate) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?); ";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql))
  {
    header("location: ../signup.php?error=stmtfailed");
    exit();

  }
  mysqli_stmt_bind_param($stmt, "sssssssss", $donoid, $dononame, $rname, $ftype, $quantity, $expiry, $locate, $comment, $ddate);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
?>
 <script>
          swal({
          title: "<?php echo "successfully, donated $ftype !" ;?>",
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