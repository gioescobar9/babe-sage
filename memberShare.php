<?php
session_start();
require_once 'headerFooter.php';
require_once 'dbOperations.php';

pageHeader("Your Weekly Share");
$cols = 3;

//connect to the database and check for successful connection
$connection = connectDB();
if($connection->connect_error) die("unable to connect to database".$connection->connect_error);

$query="SELECT name, description,imageName,price FROM products WHERE availability != 0";
$result = $connection->query($query);
if(!$result) die ("Query failed".$connection->connect_error);
$rows=$result->num_rows;
echo "<h2>This Weeks Box </h2>";
echo "<br>";
//for loop used to create a table of produce that is available 
echo "<table>";
for($i=0;$i<$rows;$i++)
{
	if($i%$cols ==0)
	echo "<tr>";
	$result->data_seek($i);
	$record=$result->fetch_array(MYSQLI_ASSOC);
	
	$vName =$record["name"];
	$imgN = "images/".$record["imageName"];
	$desc = $record["description"];
	$price = $record["price"];
	
	echo "<td>";
	//this will display the image along with name and description;
	echo<<<_END
	
	<img src = "$imgN" alt = "$vName" title = "$desc"height = "200" width = "300">
	<h4>$vName."-".$price</h4>
			

_END;
	echo "</td> ";
	if($i%$cols==3)
	echo"</tr>";
}
echo "</table>";

echo "<br>";
?>
