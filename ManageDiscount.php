<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'staybeautiful';

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);
	
	function renderForm($ProductName1 = '', $DiscountName1 = '',  $DiscountPercent1 = '', $DiscountExpiry1='', $error1 = '', $ItemId = '')
	{ ?>
	
	<!DOCTYPE html>
	<html lang="en">
	<head>
    <title>Edit Product</title>
	<link href="css/style1.css" rel="stylesheet">    
	</head><body style="background-color: #B2BABB">
	
	<h1 style="text-align: center">Edit Product</h1>
	
	<form class="form_edit" action="" method="post">
	<div>
	<?php if ($ItemId != '') { ?>
	<input type="hidden" name="ItemId" value="<?php echo $ItemId; ?>" />
	<p>Item ID: <?php echo $ItemId; ?></p>
	<?php } ?>

	<strong>Product Name: *</strong> <input type="text" name="ProductName"
	value="<?php echo $ProductName1; ?>"/><br/><br>
	<strong>Discount Name: *</strong> <input type="text" name="DiscountName"
	value="<?php echo $DiscountName1; ?>"/><br><br>
	<strong>Discount Percent: *</strong> <input type="text" name="DiscountPercent"
	value="<?php echo $DiscountPercent1; ?>"/><br/><br>
	<strong>Discount Expiry: *</strong> <input type="text" name="DiscountExpiry"
	value="<?php echo $DiscountExpiry1; ?>"/><br/><br>
	
	<p>* required</p>
	<input type="submit" name="submit" class="edit_submit" value="Submit" />
</div>
</form>

</body>
</html>

	
	<?php }	

//Edit Record

	if (isset($_GET['ItemId']))
	{

		if (isset($_POST['submit']))
		{

			if (is_numeric($_POST['ItemId']))
			{

				$ItemId = $_POST['ItemId'];
				$ProductName = htmlentities($_POST['ProductName'], ENT_QUOTES);
				$DiscountName = htmlentities($_POST['DiscountName'], ENT_QUOTES);
				$DiscountPercent = htmlentities($_POST['DiscountPercent'], ENT_QUOTES);
				$DiscountExpiry = htmlentities($_POST['DiscountExpiry'], ENT_QUOTES);

				// check that firstname and lastname are both not empty
				if ($ProductName == '' || $DiscountName == '' || $DiscountPercent == '' || $DiscountExpiry == '' )
				{
					// if they are empty, show an error message and display the form
					$error = 'ERROR: Please fill in all required fields!';
					renderForm( $ProductName, $DiscountName, $DiscountPercent, $DiscountExpiry, $error, $ItemId);
				}
				else
				{
					// if everything is fine, update the record in the database
					if ($stmt = $mysqli->prepare("UPDATE Inventory SET ProductName = ?, DiscountName = ?, DiscountPercent = ?, DiscountExpiry = ?
					WHERE ItemId= ?"))
					{
						//echo "Update Successfull";
						$stmt->bind_param("ssssi", $ProductName, $DiscountName, $DiscountPercent, $DiscountExpiry, $ItemId);
						$stmt->execute();
						$stmt->close();
					}
					// show an error message if the query has an error
					
							
					else
					{
						echo "ERROR: could not prepare SQL statement.";
					}

					// redirect the user once the form is updated
					header("Location: AdminDashboard1.php");
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
			if (is_numeric($_GET['ItemId']) && $_GET['ItemId'] > 0)
			{
				// get 'id' from URL
				$ItemId = $_GET['ItemId'];

				// get the recod from the database
				if($stmt = $mysqli->prepare("SELECT ItemId,ProductName,DiscountName,DiscountPercent,DiscountExpiry FROM Inventory WHERE ItemId=?"))
				{
					$stmt->bind_param("i",$ItemId);
					$stmt->execute();

					$stmt->bind_result($ItemId, $ProductName, $DiscountName, $DiscountPercent, $DiscountExpiry);
					$stmt->fetch();

					// show the form
					renderForm($ProductName, $DiscountName, $DiscountPercent, $DiscountExpiry, NULL, $ItemId);

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
				header("Location: AdminDashboard1.php");
			}
		}
	}
	$mysqli->close();
?>