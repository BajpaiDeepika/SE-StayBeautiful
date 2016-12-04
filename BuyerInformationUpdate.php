<?php

error_reporting(0);
	$db_host = "localhost"; 
	$db_username = "root";   
	$db_pass = "";  
	$db_name = "login"; 
	 
	$conn1=mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
	mysqli_select_db($conn1,"$db_name") or die ("no database");
	//include("connect-db.php");
	$ID=$_GET['ID'];
	//echo $ID;
	function renderForm($address = '', $city ='', $state = '', $zip = '', $phone = '',$error1 = '', $ID = '')
	{ ?>
	
	<!DOCTYPE html>
	<html lang="en">
	<head>
    <title>Edit Buyer Information</title>
	<link href="css/style1.css" rel="stylesheet">    
	</head><body style="background-color: #B2BABB">
	
	<h1 style="text-align: center">Manage Address</h1>
	
	

	<form class="form_edit" action="" method="post">
	<div>
	<?php if ($ID != '') { ?>
	<input type="hidden" name="ID" value="<?php echo $ID; ?>" />
	<center><p>ID: <?php echo $ID; ?></p>
	<?php } ?>
	<center><strong>Address: </strong> <input type="text" name="address"
	value="<?php echo $address; ?>"/><br/><br>
	<strong>City: </strong> <input type="text" name="city"
	value="<?php echo $city; ?>"/><br/><br>
	<strong>State: </strong> <input type="text" name="state"
	value="<?php echo $state; ?>"/><br/><br>
	<strong>Zip code: </strong> <input type="text" name="zip"
	value="<?php echo $zip; ?>"/><br/><br>
	<strong>Phone: </strong> <input type="text" name="phone"
	value="<?php echo $phone; ?>"/><br/><br>
	<input type="submit" name="submit" class="edit_submit" value="Submit" />
</div>
</form>

</body>
</html>

	
	<?php }	

//Edit Record

	if (isset($_GET['ID']))
	{

		if (isset($_POST['submit']))
		{

			if (is_numeric($_POST['ID']))
			{

				$ID = $_POST['ID'];
				echo $ID;
				$address = htmlentities($_POST['address'], ENT_QUOTES);
				$city = htmlentities($_POST['city'], ENT_QUOTES);
				$state = htmlentities($_POST['state'], ENT_QUOTES);
				$zip = htmlentities($_POST['zip'], ENT_QUOTES);
				$phone = htmlentities($_POST['phone'], ENT_QUOTES);
				
				// check that firstname and lastname are both not empty
				
				if ($ID == '' || $address == '' || $city == '' || $state == '' || $zip == '' || $phone == '')
				{
					
					echo "if they are empty, show an error message and display the form";
					$error = 'ERROR: Please fill in all required fields!';
					renderForm($address, $city, $state, $zip, $phone,$error, $ID);
				}
				else
				{
					// if everything is fine, update the record in the database
					echo $address;
					echo $city;
					echo $state;
					echo $zip;
					echo $phone;
					
					
					if ($stmt = $conn1->prepare("UPDATE members1 SET address = ?, city = ?, state = ?, zip = ?, phone = ?
					WHERE userid= ?"))
					{
						
						//header("Location: BDashboard.php");
						$stmt->bind_param("sssssi", $address, $city, $state, $zip, $phone,$ID);
						$stmt->execute();
						$stmt->close();
						
					}
					// show an error message if the query has an error
					
							
					else
					{
						echo "ERROR: could not prepare SQL statement.";
					}

					// redirect the user once the form is updated
					//header("Location: BDashboard.php?user_id=$ID");
					header("Location: BDashboard.php?user_id=$ID");
				}
			}
			// if the 'id' variable is not valid, show an error message
			else
			{
				echo "Error!";
			}
		}
		// if the form hasn't been submitted yet, get the info from the database and show the form
		else
		{
			// make sure the 'id' value is valid
			if (is_numeric($_GET['ID']) && $_GET['ID'] > 0)
			{
				// get 'id' from URL
				$ID = $_GET['ID'];
				echo $ID;
				// get the recod from the database
				if($stmt = $conn1->prepare("SELECT address,city,state,zip,phone FROM members1 WHERE userid= $ID"))
				{
					$stmt->bind_param("sssssi",$address, $city, $state, $zip, $phone, $ID);
					$stmt->execute();

					$stmt->bind_result($address, $city, $state, $zip, $phone);
					$stmt->fetch();

					// show the form
					renderForm($address, $city, $state, $zip, $phone, NULL, $ID);

					$stmt->close();
				}
				// show an error if the query has an error
				else
				{
					echo "Error: could not prepare SQL statement";
				}
				
				
			}
			// if the 'id' value is not valid, redirect the user back to the view.php page
			else
			{
				header("Location: BDashboard.php?user_id=$ID");
			}
		}
	}
	$conn1->close();
?>