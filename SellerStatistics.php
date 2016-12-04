<?php
	include("connect-db.php");
?>
	
	<!DOCTYPE html>
	<html lang="en">
	<head>
    	<title>Seller Statistics</title>
	<link href="css/style1.css" rel="stylesheet">    
	</head>
	<body style="background-color: #B2BABB">
	<div>
	<center><h1>Seller Statistics</h1></center>
	</div>
	<?php
	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'staybeautiful';
	$conn= new mysqli($server, $user, $pass, $db);
	echo "<table class='table' border='2' cellpadding='20' align='center'>";
	echo "<tr>";
	echo "<th>Seller Name</th><th>Product Name</th><th>Total Quantity Sold</th><th>Total Quantity in Inventory</th>";
	echo "</tr>";
	if($result = $conn->query("select i.SellerName, i.ProductName, sum(o.Quantity) as TotalQuantitySold ,i.Quantity as QuantityPending from inventory i left join orderconfirmation o on i.ProductName= o.ProductName GROUP BY i.SellerName, i.ProductName"));
	{
			$i=0;
			$total_results = $result->num_rows;
		while($result->num_rows != 0)
		{
			if ($i == $total_results )
			{break;}
			$row = $result->fetch_array();
			echo "<tr>";
			echo "<td align='center'>" .$row[0]. "</td>";
			echo "<td align='center'>" .$row[1]. "</td>";
			echo "<td align='center'>" .$row[2]. "</td>";
			echo "<td align='center'>" .$row[3]. "</td>";
			echo "</tr>";
			$i++;
		}
		echo "</table>";
		
		}
	?>
	<?php
	?>
	</tr>
	</table>
	</div>
	<p align ="center">
	<button onclick="history.go(-1);">Back </button>
	</p>
	</body>
	</html>