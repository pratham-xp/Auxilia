<?php
  include_once 'header.php' ;
  if (!isset($_SESSION["useruid"])){
  header("Location: index.php");
  }
  include 'includes/dbh.inc.php';
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout Card</title>
    <link href='https://www.soengsouy.com/favicon.ico' rel='icon' type='image/x-icon'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- library validate -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
    <!-- style css -->
    <link rel="stylesheet" href="hstyle.css">
</head>


<section id="donation-page">
<body>
<h2>Checkout</h2>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form id="validate" method="post">
                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="fullname" placeholder="Enter Name" required>
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="Enter Email" required>
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="Enter Address" required>
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="Enter City" required>

                        <div class="row">
                            <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="Enter State"required>
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="Enter Zip Code"required>
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>

                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="Enter Card Name"required>
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="Enter Credit Card Number"required>
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="Enter Expiration Month"required>
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="Enter Expiration Year"required>
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="Enter CVV"required>
                            </div>
                        </div>
                    </div>
                </div>
                <label>
                <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>

            </form>
        </div>
    </div>
      <section id="donation-page">

      <div class="donate_form">
      <h2>DONATE</h2>
      <form class="input-group" method="post">
          <div class="dn-div">Enter the amount you would like  to donate</div>
          <input type="number" class="input-field" name="amount" placeholder="₹">
          <div class="dn-div">Comments</div>
          <input type="text" class="input-field" name="note" placeholder="Comment">
          <div class="dn-div">Recipient</div>
          <div>
          <?php
          $query="SELECT rName,uId FROM recipient WHERE rId!='{$_SESSION["userid"]}'";
          if($r_set = $conn->query($query))
          {
            echo "<select name=recip class='form-control'>";
            while ($row = $r_set->fetch_assoc())
            {
                echo "<option name='recip' value=$row[rName]>$row[rName]</option>";
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
      $donoid= $_SESSION["userid"];
      $dononame= $_SESSION["usename"];
      $amo = $_POST["amount"];
      $comment = $_POST["note"];
      $ddate = $_POST["donodate"];
      $sql = "INSERT INTO donations (Amount, Date, Notes, DonorId, Dname, recName) VALUES(?, ?, ?, ?, ?, ?); ";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql))
      {
        header("location: ../signup.php?error=stmtfailed");
        exit();
      }
      mysqli_stmt_bind_param($stmt, "ssssss", $amo, $ddate, $comment, $donoid, $dononame, $rname);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      ?>
        <script>
          swal({
          title: "<?php echo "successfully, donated Rs:$amo !" ;?>",
          text: "<?php echo "Thank you for using Auxilia,$dononame" ;?>",
          icon: "success",
          button: "Close",
          });
        </script>
        <?php
    }
    ?>
    </section>


</section>
</div>

</body>
</html>

<?php
  include_once 'footer.php' ;
?>
