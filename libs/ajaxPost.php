<?php

include ('mysqliConnect.php');

$customer_id = uniqid();
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];

//sanitize dem inputs!
$customer_id = $mysqli->real_escape_string($customer_id);
$fname= $mysqli->real_escape_string($fname);
$lname= $mysqli->real_escape_string($lname);
$zip= $mysqli->real_escape_string($zip);
$phone= $mysqli->real_escape_string($phone);


$query = "INSERT INTO `customer` (customer_id, fname, lname, zip, phone) VALUES ('$customer_id','$fname','$lname','$zip','$phone');
";
$mysqli->query($query);


echo "Thank you for registering ".$fname." ".$lname.". ";
?>
