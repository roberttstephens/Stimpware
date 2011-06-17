<?php
//include ('libs/mysqliConnect.php');

<?php 
//include the below code in the above file. 
$mysqli = new mysqli('localhost', 'root', 'taint1234', 'cloudspace'); 

if (mysqli_connect_errno()) { 
     printf("Can't connect to MySQL Server. Errorcode: %s\n", mysqli_connect_error()); 
        exit; 
} 

if ($result = $mysqli->query('SELECT * FROM quotes')) { 
  while( $row = $result->fetch_assoc() ){ 
    echo $row['quote_text']."<br>".$row['author_fname']." ".$row['author_lname']."<br> <br>"; 
  } 

  $result->close(); 
} 


$mysqli->close(); 
?>
