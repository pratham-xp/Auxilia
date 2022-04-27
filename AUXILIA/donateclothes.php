<?php
  include_once 'header.php' ;
  if (!isset($_SESSION["useruid"])){
  header("Location: index.php");
  }
  include 'includes/dbh.inc.php';

?>
  <section id="clothes-page">

  <div class="donate_form">
  <h2>DONATE CLOTHING</h2>
  <form class="input-group" method="post">
      <div><label for="Gender">Enter the gender type of clothing:</label><br></div>
      <div>
      <select name="Gender" id="">
        <option value="Select">Select</option>}  
        <option value="Male">Male</option>  
        <option value="Female">Female</option>  
        <option value="Unisex">Unisex</option>
      </select>
        </div>

      <div> Enter the type of clothing you would like to donate </div>
      <input type="text" class="input-field" name="clothingtype" placeholder="Type of clothing">
      <div><label for="Size">Enter the size of clothes: </label></div>
      <div>
      <select name="Size" id="">
        <option value="Select">Select</option>}
        <option value="X Small">XS</option>   
        <option value="Small">S</option>  
        <option value="Medium">M</option>  
        <option value="Large">L</option>
        <option value="X Large">XL</option>
        <option value="XX Large">XXL</option>
        <option value="Freesize">Freesize</option>
      </select>
      </div>
      <div>Enter pickup location</div>
      <input type="text" class="input-field" name="location" placeholder="Location">

      <div><label for="Comments">Comments: </label></div>
      <input type="text" class="input-field" name="note" placeholder="Comment">

      <div class="dn-div">Recipient</div>
          <div>
          <?php
          $query="SELECT rname,ruserid FROM clothes WHERE ruserid!='{$_SESSION["useruid"]}'";
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
  $rname=$_POST["recip"];
  $clocate= $_POST["location"];
  $gender= $_POST["Gender"];
  $ctype= $_POST["clothingtype"];
  $size= $_POST["Size"];
  $comment = $_POST["note"];
  $ddate = $_POST["donodate"];
  $sql = "INSERT INTO donation_clothes (donorid, donorname, recipientName, clothes_type, clothes_gender, clothes_size, clothes_location, comments, donatedate) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?); ";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql))
  {
    header("location: ../signup.php?error=stmtfailed");
    exit();

  }
  mysqli_stmt_bind_param($stmt, "sssssssss", $donoid, $dononame, $rname, $ctype, $gender, $size, $clocate, $comment, $ddate);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
?>
<script>
          swal({
          title: "<?php echo "successfully, donated $ctype" ;?>",
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