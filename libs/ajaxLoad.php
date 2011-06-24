<?php
include ('mysqliConnect.php');

if ($result = $mysqli->query("SELECT category, MIN(price) FROM product GROUP BY category")) {

  while($row = $result->fetch_array()) {
  //printf ("%s (%s)\n", $row["category"], $row["MIN(price)"]);
  echo $row['category']." - $";
  echo $row['MIN(price)']."<br>";
  }
    
//  echo "<pre>"; 
//  print_r($result);
  
  
  $result->close();
}
else echo "no result";

?>
