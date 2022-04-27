<?php

if (isset($_POST["submit"]))

{ require_once 'dbh.inc.php';
  require_once 'functions.inc.php';
  $email_to = $_POST["uemail"];
  $subject = "simple emails with php";
  $message =" This was sent with a php script \n\n yee hawwww!";
  $headers = "From: rishiajith21@gmail.com";
  if(mail($email_to, $subject, $message, $headers) )
      echo "success, email sent to $email_to" ;
  else
      echo 'not sent';
}
