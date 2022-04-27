<?php
//use phpGrid\C_DataGrid;
include_once("phpGrid/conf.php");
?>
<link rel="stylesheet" href="style.css">
<button onclick="location.href='index.php'" type="button" class="h-btn">HOME</button>
<h1>DONATION RECORDS</h1>

<?php
$_GET['currentPage'] = 'donations';

?>

<?php

$dgDonations = new C_DataGrid("SELECT * FROM donation_clothes WHERE donorid='{$_SESSION["useruid"]}'", "donorid", "donation_clothes");
$dgDonations->enable_edit();
$dgDonations->enable_autowidth(true);
$dgDonations->set_col_edittype('select', "select id, usersName from users");
//$dgDonations->set_col_edittype('select', "select usersName from users");
//$dgDonations->enable_global_search(true);
$dgDonations->set_col_title("donorid", "User ID");
$dgDonations->set_col_title("donorname", "Donor Name");
$dgDonations->set_col_title("recipientName", "Recipient Name");
$dgDonations->set_col_title("clothes_type", "Clothes Type");
$dgDonations->set_col_title("clothes_gender", "Gender Type");
$dgDonations->set_col_title("clothes_size", "Size");
$dgDonations->set_col_title("clothes_location", "Pickup Location");
$dgDonations->set_col_title("comments", "Notes");
$dgDonations->set_col_title("donatedate", "Donation Date");
$dgDonations-> set_caption("DONATIONS");
// $dgDonations->enable_dnd_grouping(true);

$dgDonations -> display();
?>