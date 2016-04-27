<?php
require_once "dbOperations.php";
require_once "headerFooter.php";

pageHeader("Summary of Current Orders");

//attempt to connect to the database
$connection = connectDB();
if($connection->connect_error) die("unable to connect to database".$connection->connect_error);

//query to select available products from database
$query="SELECT name, description FROM products WHERE availability != 0";

$result = $connection->query($query);
if(!$result) die ("Query failed".$connection->connect_error);

//split up the query into an array
$array = explode("/",$query);

//print out all the products that are currently available
for($x = 0; $x < $array.length(); $x++)
{
	echo $array[$x];
}

//checkboxes to indicate which products are selected		
echo<<<_END
<body>

<form action="">
<input type="checkbox" name="greeen beans" value="Green Beans">Green Beans<br>
<input type="checkbox" name="squash" value="squash">Yellow Squash<br>
<input type="checkbox" name="beefsteak tomatoes" value = "beefsteak">Beefsteak Tomatoes<br>
<input type="checkbox" name="radishes" value = "radishes">Radishes<br>
<input type="checkbox" name="carrots" value = "carrots">Carrots<br>		
</form>

</body>
_END
?>
