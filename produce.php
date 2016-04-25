<?php
// include dbOperations and headerFooter which prevents repeating the same code in each file 
require_once 'dbOperations.php';
require_once 'headerFooter.php';
pageHeader("Weekly Share + Yearly Produce")
//connect to the database and check for successful connection
$connection = connectDB();
if($connection->connect_error) die("unable to connect to database".$connection->connect_error);
//query to select produce based on the availablity and submit the query as long as it doesnt fail
$query="SELECT name, description FROM products WHERE availability != 0"
$result = $connection->query($query)
if(!$result) die ("Query failed".$connection->connect_error);
$rows=$result->num_rows;
echo "<h2>This weeks produce includes: </h2>"
echo "<br>"
//for loop used to display the available produce 
for($i=0; $i<$rows; $i++)
{
  $result->data_seek($i);
  $record=$result->fetch_array(MYSQLI_ASSOC);
  $productName = $record["name"];
  $descrip = $record["description"];
   echo "<h3>".$productName."</h3>"
  echo "<p>";
  echo $descrip;
  echo "</p>";
}
echo "<br>"
// new query to show yearly produce, also checking to make sure the query was successful
$queryNew="SELECT name, description, imageName FROM products"
$resultNew = $connection->query($queryNew)
if(!$result) die ("Query failed".$connection->connect_error);
$newRows=$resultNew->num_rows;
echo "<h2>This weeks produce includes: </h2>"
echo "<br>"
//for loop to display all products names with heading 3 and all descriptions with heading 4
for($i=0; $i<$newRows; $i++)
{
  $resultNew->data_seek($i);
  $record=$resultNew->fetch_array(MYSQLI_ASSOC);
  $productName = $record["name"];
  $descrip = $record["description"];
  $imageName = $record['imageName'];
  echo "<h3><img src='imageName' width=150 heigth=100 >".$productName."</image></h3>"
   echo "<p>";
  echo $descrip;
  echo "</p>";
}

//close connection
// might have to make all the results the same variable
closeConnection($result, $connection);
closeConnection($resultNew,$connection);
?>
