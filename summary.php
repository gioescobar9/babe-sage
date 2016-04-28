<?php
require_once "dbOperations.php";
require_once "headerFooter.php";

pageHeader("Summary of Current Orders");

//attempt to connect to the database
/*$connection = connectDB();
if($connection->connect_error) die("unable to connect to database".$connection->connect_error);


$result = $connection->query($query);
if(!$result) die ("Query failed".$connection->connect_error);

$rows = $result->num_rows;*/


//checkboxes to indicate which products are selected		
echo<<<_END
<body>
										
<form action="checked.php" method = "POST">
<input type="checkbox" name = "spinach" class = "checkboxes" value="spinach">Spinach<br>
<input type="checkbox" name = "lettuce mix" class = "checkboxes" value="lettuce">Lettuce Mix<br>
<input type="checkbox" name = "mesclun" class = "checkboxes" value = "mesclun">Mesclun<br>
<input type="checkbox" name = "acorn squash" class = "checkboxes" value = "acorn squash">Acorn Squash<br>
<input type="checkbox" name = "baby carrots" class = "checkboxes" value = "baby carrots">Baby Carrots<br>
<input type="checkbox" name = "basil" class = "checkboxes" value = "basil">Basil<br>
<input type="checkbox" name = "beets" class = "checkboxes" value = "beets">Beets<br>
<input type="checkbox" name = "bok choy" class = "checkboxes" value = "bok choy">Bok Choy<br>
<input type="checkbox" name = "broccoli" class = "checkboxes" value = "broccoli">Broccoli<br>								
<input type="checkbox" name = "butternut squash" class = "checkboxes" value = "butternut squash">Butternut Squash<br>
<input type="checkbox" name = "cabbage" class = "checkboxes" value = "cabbage">Cabbage<br>
<input type="checkbox" name = "cantaloupe" class = "checkboxes" value = "cantaloupes">Cantaloupe<br>
<input type="checkbox" name = "carrots" class = "checkboxes" value = "carrots">Carrots<br>
<input type="checkbox" name = "cauliflower" class = "checkboxes" value = "cauliflower">Cauliflower<br>
<input type="checkbox" name = "chard" class = "checkboxes" value = "chard">Chard<br>
<input type="checkbox" name = "cherry tomatoes" class = "checkboxes" value = "cherry tomatoes">Cherry Tomatoes<br>
<input type="checkbox" name = "cilantro" class = "checkboxes" value = "cilantro">Cilantro<br>
<input type="checkbox" name = "collards" class = "checkboxes" value = "collards">Collards<br>
<input type="checkbox" name = "delicata squash" class = "checkboxes" value = "delicata squash">Delicata Squash<br>
<input type="checkbox" name = "eggplant" class = "checkboxes" value = "eggplant">Eggplant<br>
<input type="checkbox" name = "fennel" class = "checkboxes" value = "fennel">Fennel<br>
<input type="checkbox" name = "garlic" class = "checkboxes" value = "garlic">Garlic<br>
<input type="checkbox" name = "ginger" class = "checkboxes" value = "ginger">Ginger<br>
<input type="checkbox" name = "green beans" class = "checkboxes" value = "green beans">Green Beans<br>
<input type="checkbox" name = "green garlic" class = "checkboxes" value = "green garlic">Green Garlic<br>
<input type="submit" value = "submit" action = "checked.php">																																
</form>

</body>
_END

?>
