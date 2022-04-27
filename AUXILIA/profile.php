<?php

  include_once 'header.php' ;

  if (!isset($_SESSION["useruid"])){
  header("Location: index.php");
  }
  include 'includes/dbh.inc.php';


if(isset($_POST["submit"])){
  $full_name = mysqli_real_escape_string($conn, $_POST["name"]);
  $password = mysqli_real_escape_string($conn, $_POST["pwd"]);
  $cpassword = mysqli_real_escape_string($conn, $_POST["pwdrepeat"]);

if($password  === $cpassword){
  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
  $sql = "UPDATE users SET usersName='$full_name', usersPwd='$hashedPwd' WHERE usersUid='{$_SESSION["useruid"]}'";
  $result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('Profile Updated successfully.');</script>";
   // move_uploaded_file($photo_tmp_name, "uploads/" . $photo_new_name);
}




   else {
      echo "<script>alert('Profile can not Updated.');</script>";
      echo  $conn->error;
  }
}

else{
  echo"<script>alert('Password not matched. Please try again');</script>";
}

}




?>




<title>PROFILE PAGE</title>

<body class="profile-page" >
     <div class="wrapper">
       <h2>Profile</h2>
           <form action="" method="post">
            <?php

             $sql = "SELECT * FROM users WHERE usersUid='{$_SESSION["useruid"]}'";
            $result= mysqli_query($conn, $sql);
           // $row = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) > 0 ){
              while($row = mysqli_fetch_assoc($result)){
            ?>
                  <div class="inputBox">
                    <div >Full Name</div>
                    <input type="text" id="full_name" name="name" placeholder="Full Name" value="<?php echo $row['usersName']; ?>"  disabled required>
                  </div>
                  <div class="inputBox">
                    <div >Change Email</div>
                    <input type="email" id="email" name="email" placeholder="Email Address" value="<?php echo $row['usersEmail']; ?>"  required>
                  </div>
                  <div class="inputBox">
                    <div >Change Password</div>
                    <input type="password" id="password" name="pwd" placeholder="Password" required>
                  </div>
                  <div class="inputBox">

                    <input type="password" id="cpassword" name="pwdrepeat" placeholder="Repeat Password" required>
                  </div>


            <?php
              }

             }

             ?>

                  <div>
                          <button type="submit" name="submit" class="btn">UPDATE PROFILE</button>
                          <button onclick="location.href='donations.php'" type="button" class="btn">CASH DONATION</button>
                          <button onclick="location.href='donation_record_furniture.php'" type="button" class="btn">FURNITURE DONATION</button>
                          <button onclick="location.href='donation_record_clothes.php'" type="button" class="btn">CLOTHES DONATION</button>
                          <button onclick="location.href='donation_record_food.php'" type="button" class="btn">FOOD DONATION</button>
                  </div>
           </form>
     </div>
</body>


    <?php
       include_once 'footer.php' ;
     ?>
