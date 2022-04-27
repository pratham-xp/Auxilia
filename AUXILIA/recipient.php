
<?php
  include_once 'header.php' ;
  if (!isset($_SESSION["useruid"])){
  header("Location: index.php");
  }
  include 'includes/dbh.inc.php';

?>
  <section id="donation-page">

  <div class="donate_form">
  <h2>REQUEST DONATION</h2>
  <form class="input-group" method="post">
      <div>Enter the amount you would like to request for donation</div>
      <input type="number" class="input-field" name="amount" placeholder="₹">
      <div>Details of the donation request </div>
      <input type="text" class="input-field" name="note" placeholder="Details">
      <button type="submit" class="submit-btn" name="submit">SUBMIT REQUEST</button>
  </form>
  </div>

  <?php
  if (isset($_POST["submit"]))
{

  $rid= $_SESSION["userid"];
  $rname= $_SESSION["usename"];
  $ramo = $_POST["amount"];
  $comment = $_POST["note"];
  $sql = "INSERT INTO Recipient (rName, rId, rNotes, rAmount) VALUES( ?, ?, ?, ?); ";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql))
  {
    header("location: ../signup.php?error=stmtfailed");
    exit();

  }
  mysqli_stmt_bind_param($stmt, "ssss", $rname, $rid, $comment, $ramo);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  ?>
    <script>
      swal({
      title: "<?php echo "Donation request of Rs:$amo has been successfully submitted!" ;?>",
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
