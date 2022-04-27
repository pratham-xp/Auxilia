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

$dgDonations = new C_DataGrid("SELECT * FROM donations WHERE DonorId='{$_SESSION["userid"]}'", "DonorId", "donations");
$dgDonations->set_col_hidden('DonorId');
$dgDonations->set_col_hidden('id');
$dgDonations->enable_edit();
$dgDonations->enable_autowidth(true);
$dgDonations->set_col_edittype('select', "select id, usersName from users");
//$dgDonations->set_col_edittype('select', "select usersName from users");
//$dgDonations->enable_global_search(true);
$dgDonations->set_col_currency("Amount", "₹");
$dgDonations->set_col_title("Dname", "Donor Name");
$dgDonations->set_col_title("recName", "Recipient Name");
$dgDonations-> set_caption("DONATIONS");
// $dgDonations->enable_dnd_grouping(true);

$dgDonations -> display();
?>
