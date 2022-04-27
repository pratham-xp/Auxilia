<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
  <title>AUXILIA</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/9a611d0209.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
  <div id="preloader"></div>

<section id="header">
  <nav class="navbar navbar-light">
  <a class="navbar-brand" href="index.php"><img src="images/LOGO.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <?php
        if (isset($_SESSION["useruid"])) {
          echo "<li class='nav-item'><a class='nav-link' href='profile.php'>Profile Page</a></li>";
          echo "<li class='nav-item'><a class='nav-link ' href='includes/logout.inc.php'>Log Out</a></li> ";
        }
        else
        {
          echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
          echo '<li class="nav-item"><a class="nav-link " href="signup.php">Sign Up</a></li> ';
        }
       ?>
      <li class="nav-item">
        <a class="nav-link " href="#footer">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
