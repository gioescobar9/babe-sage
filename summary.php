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
<input type="checkbox" name = "spinach" value="Spinach">Spinach<br>
<input type="checkbox" name = "lettuce mix" value="Lettuce Mix">Lettuce Mix<br>
<input type="checkbox" name = "mesclun" value = "Mesclun">Mesclun<br>
<input type="checkbox" name = "acorn squash" value = "Acorn Squash">Acorn Squash<br>
<input type="checkbox" name = "baby carrots" value = "Baby Carrots">Baby Carrots<br>
<input type="checkbox" name = "basil" value = "Basil">Basil<br>
<input type="checkbox" name = "beets" value = "Beets">Beets<br>
<input type="checkbox" name = "bok choy" value = "Bok Choy">Bok Choy<br>
<input type="checkbox" name = "broccoli" value = "Broccoli">Broccoli<br>								
<input type="checkbox" name = "butternut squash" value = "Butternut Squash">Butternut Squash<br>
<input type="checkbox" name = "cabbage" value = "Cabbage">Cabbage<br>
<input type="checkbox" name = "cantaloupe" value = "Cantaloupe">Cantaloupe<br>
<input type="checkbox" name = "carrots" value = "Carrots">Carrots<br>
<input type="checkbox" name = "cauliflower" value = "Cauliflower">Cauliflower<br>
<input type="checkbox" name = "chard" value = "Chard">Chard<br>
<input type="checkbox" name = "cherry tomatoes" value = "Cherry Tomatoes">Cherry Tomatoes<br>
<input type="checkbox" name = "cilantro" value = "Cilantro">Cilantro<br>
<input type="checkbox" name = "collards" value = "Collards">Collards<br>
<input type="checkbox" name = "delicata squash" value = "Delicata Squash">Delicata Squash<br>
<input type="checkbox" name = "eggplant" value = "Eggplant">Eggplant<br>
<input type="checkbox" name = "fennel" value = "Fennel">Fennel<br>
<input type="checkbox" name = "garlic" value = "Garlic">Garlic<br>
<input type="checkbox" name = "ginger" value = "Ginger">Ginger<br>
<input type="checkbox" name = "green beans" value = "Green Beans">Green Beans<br>
<input type="checkbox" name = "green garlic" value = "Green Garlic">Green Garlic																														
</form>

</body>
_END
?>
