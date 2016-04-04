<?php
function connectDB()
{
	$server="localhost";
	$db="babeSage";
	$user="";
	$pwd="";
	$connection=new mysqli($server,$user,$pwd, $db);
	if($connection-> connect_error) die("unablbe to connect to database".$connection->connec_error);
	
	return $connection;
}

function closeConnection($result,$connection)
{
  mysqli-close($connection);
}
?>
