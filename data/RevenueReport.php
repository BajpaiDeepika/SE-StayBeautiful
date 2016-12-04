<?php
	include("connect-db.php");
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
    	<title>Revenue Report</title>
	<link href="css/style1.css" rel="stylesheet">    
	</head>
	<body style="background-color: #B2BABB">
	<div>
	<center><h1>Revenue Report</h1></center>
	</div>
	<?php
		$server = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'staybeautiful';
		$conn= new mysqli($server, $user, $pass, $db);
		if (isset($_POST['ID']))
		{
		$ID = $_POST['ID'];
		}
			echo "<table class='table' border='2' cellpadding='20' align='center'>";
			echo "<tr>";
			echo "<th>Product Name</th><th>Total price</th>";
			echo "</tr>";
			if($result = $conn->query("Select distinct(o.ProductName), o.TotalPrice from staybeautiful.orderconfirmation o, staybeautiful.inventory i,login.members m where i.ProductName=o.ProductName and m.sellername= i.SellerName and m.sellerid= $ID"))
			{
			$i=0;
			$total_results = $result->num_rows;
		while($result->num_rows != 0)
		{
			if ($i == $total_results )
			{break;}
			$row = $result->fetch_array();
			echo "<tr>";
			echo "<td>" .$row[0]. "</td>";
			echo "<td>" .$row[1]. "</td>";
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
	
