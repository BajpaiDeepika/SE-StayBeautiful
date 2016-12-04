<?php
	include("connect-db.php");
	$db_host = "localhost"; 
	$db_username = "root";   
	$db_pass = "";  
	$db_name = "login"; 

	
	//echo $_GET['user_id'];
	
	 
	$conn1=mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
	mysqli_select_db($conn1,"$db_name") or die ("no database");
	
	
	
?>
	
	<!DOCTYPE html>
	<html lang="en">
	<head>
    <title>Purchase Report</title>
	<link href="css/style1.css" rel="stylesheet">    
	</head>
	<body style="background-color: #B2BABB">
	<div>
	<center><h1>Purchase Report</h1>
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
		$query="Select username FROM members1 where userid=$ID limit 1";
		$result = mysqli_query($conn1,$query);
		$value = mysqli_fetch_object($result);
		$username = $value->username;
		//echo $username;
		}
			echo "<table class='table' border='2' cellpadding='20' align='center'>";
			echo "<tr>";
			echo "<th>Product Name</th><th>Quantity</th><th>Price</th><th>Date</th>";
			echo "</tr>";
		if($result = $conn->query("select o.ProductName, o.Quantity, o.Price, DATE_FORMAT(o.Date,'%d %b %y') from orderconfirmation o where o.username='$username' order by Date desc"))
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
			echo "<td>" .$row[2]. "</td>";
			echo "<td>" .$row[3]. "</td>";
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
	
