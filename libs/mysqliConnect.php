 <?php

$host = 'localhost';
<<<<<<< HEAD
$user = 'cloudspace';
$passwd = 'cloudspace';
=======
$user = 'root';
$passwd = 'notshowingpassword';
>>>>>>> 897cef3d14f791a1869e589852fd2752c0045c63
$database = 'cloudspace';



$mysqli = new mysqli($host, $user, $passwd, $database);

if (mysqli_connect_errno()) {
    printf("Can't connect to MySQL Server. Errorcode: %s\n", mysqli_connect_error());
      exit;
}

 
?>
