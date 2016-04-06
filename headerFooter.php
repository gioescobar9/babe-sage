<?php
include 'style.php'
/* page header function to include on every page to display the same lay out of the page
includes a link to the login page, the products page, and the who we are page*/
function pageHeader($pt)
{
echo<<<_END;
  <h1><img src="imageName" width="200" height="140" alt="farmLogo" align="left"/><br>$pt</h1>
  <h3>
  <a href = "login.php"><Login</a>
  <a href = "products.php"><Products</a>
  <a href = "about.php"><Who we are</a>
  </h3>
_END;
}

/*generate table function used throughout our project to generate a table when needed*/
function generateTable($arr, $colNames)
{
		
	echo"<table>";
	echo"<tr>";
	foreach($colNames as $col)
	{
		echo "<th>$col</th>";
	}
	echo "</tr>";
	foreach($arr as $record)
	{
	echo "<tr>";
		foreach($record as $col)
		{
		echo "<td> $col</td>";
		echo "</tr>";
		}
	echo "</table>";
	}
}
