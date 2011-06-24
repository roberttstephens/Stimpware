 <?php

$host = 'localhost';
$user = 'root';
$passwd = 'taint1234';
$database = 'cloudspace';



$mysqli = new mysqli($host, $user, $passwd, $database);

if (mysqli_connect_errno()) {
    printf("Can't connect to MySQL Server. Errorcode: %s\n", mysqli_connect_error());
      exit;
}

 
?>
