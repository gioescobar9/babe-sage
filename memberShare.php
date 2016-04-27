<?php
require_once 'dbOperations.php';
require_once 'headerFooter.php';
pageHeader("Your Weekly Share")
//connect to the database and check for successful connection
$connection = connectDB();
if($connection->connect_error) die("unable to connect to database".$connection->connect_error);
//query to select produce based on the availablity and submit the query as long as it doesnt fail
$query="SELECT name, description, price FROM products WHERE availability != 0";
$result = $connection->query($query)
if(!$result) die ("Query failed".$connection->connect_error);
$rows=$result->num_rows;
echo "<h2>This weeks produce includes: </h2>";
echo "<br>";
//for loop used to display the available produce 
for($i=0; $i<$rows; $i++)
{
  $result->data_seek($i);
  $record=$result->fetch_array(MYSQLI_ASSOC);
  $productName = $record["name"];
  $descrip = $record["description"];
  echo "<h3>".$productName."</h3>";
  echo "<p>";
  echo $descrip;
  echo "</p>";
}
echo "<br>"
?>
