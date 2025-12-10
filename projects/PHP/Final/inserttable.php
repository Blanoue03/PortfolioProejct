<?php
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);
$name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$destination = $_POST['destination'];
$departure = $_POST['travel_date'];
$cost = $_POST['trip_cost'];



$query = "INSERT INTO vacation_bookings values(
 0,
 '$name',
 '$email',
 '$phone',
 '$destination',
 '$departure',
 '$cost'
)";
   
         
mysqli_query($dbc, $query);

header("Location: https://blanoue.scweb.ca/Projects/PHP/Final/createtable.php");
exit;

?>