<?php

$dblocation = 'localhost';
$username = 'root';
$passwd = 'taint1234';
$dbname = 'cloudspace';

@ $db = new mysqli($dblocation, $username, $passwd, $dbname);
/*
if ($db->connect_error) {
  die('Connect Error (' . $db->connect_errno . ') '
    . $db->connect_error);
}
*/
if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
          exit();
}
?>
