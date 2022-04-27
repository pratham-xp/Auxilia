<?php
  include_once 'header.php' ;
  if (!isset($_SESSION["useruid"])){
  header("Location: index.php");
  }
  include 'includes/dbh.inc.php';
 ?>

    <section id="donatefurniture-page">

      <div class="donate_form">
      <h2>DONATE FURNITURE</h2>
      <form class="input-group" method="post">
          <div class="dn-div">Enter the type of furniture you would like  to donate</div>
          <input type="text" class="input-field" name="furnituretype" placeholder="Type of furniture">
          <div>Enter pickup location</div>
          <input type="text" class="input-field" name="location" placeholder="Location">
          <div class="dn-div">Comments</div>
          <input type="text" class="input-field" name="note" placeholder="Comment">
          <div class="dn-div">Recipient</div>
          <div>
          <?php
          $query="SELECT recipient_name,recipient_id FROM furniture WHERE recipient_id!='{$_SESSION["useruid"]}'";
          if($r_set = $conn->query($query))
          {
            echo "<select name=recip class='form-control'>";
            while ($row = $r_set->fetch_assoc())
            {
                echo "<option name='recip' value=$row[recipient_name]>$row[recipient_name]</option>";
            }
            echo "</select>";
          }
          else
          {
            echo $conn->error;
          }
          ?>
          </div>
          <div class="dn-div">Date</div>
          <input type="date" name="donodate"  min="2021-01-01" max="2022-12-31">
          <br>
          <button type="submit" class="submit-btn" name="submit">DONATE</button>

      </form>
      </div>

      <?php
      if (isset($_POST["submit"]))
    {
      $rname=$_POST["recip"];
      $donoid= $_SESSION["useruid"];
      $dononame= $_SESSION["usename"];
      $locate = $_POST["location"];
      $ftype = $_POST["furnituretype"];
      $comment = $_POST["note"];
      $ddate = $_POST["donodate"];
      $sql = "INSERT INTO donation_furniture (donorid, donorname, recipientName, furniture_type, furniture_location, comments, donatedate) VALUES(?, ?, ?, ?, ?, ?, ?); ";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql))
      {
        header("location: ../signup.php?error=stmtfailed");
        exit();
      }
      mysqli_stmt_bind_param($stmt, "sssssss", $donoid, $dononame, $rname, $ftype, $locate, $comment, $ddate);
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