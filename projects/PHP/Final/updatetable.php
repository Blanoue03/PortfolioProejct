<?php
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);
$name = $_POST['full_name'];
$email = $_POST['updateEmail'];
$phone = $_POST['phone'];
$destination = $_POST['destination'];
$departure = $_POST['travel_date'];
$cost = $_POST['trip_cost'];



$query = "UPDATE vacation_bookings SET
 full_name ='$name',
 phone = '$phone',
 destination = '$destination',
 travel_date = '$departure',
 trip_cost = '$cost'
 WHERE email = '$email'
";
   
         
if (mysqli_query ($dbc, $query)) 
{
    echo "The query was successfully executed!";
    }
    else {
    echo "The query could not be executed! Error: ". mysqli_error($dbc);
    }

    header("Location: https://blanoue.scweb.ca/Projects/PHP/Final/createtable.php");
exit;
?>