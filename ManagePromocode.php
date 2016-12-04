<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'staybeautiful';

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);
	
	function renderForm($ProductName1 = '', $PromocodeName1 = '',  $PromocodePercent1 = '', $PromocodeExpiry1='', $error1 = '', $ItemId = '')
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
	<strong>Promocode Name: *</strong> <input type="text" name="PromocodeName"
	value="<?php echo $PromocodeName1; ?>"/><br><br>
	<strong>Promocode Percent: *</strong> <input type="text" name="PromocodePercent"
	value="<?php echo $PromocodePercent1; ?>"/><br/><br>
	<strong>Promocode Expiry: *</strong> <input type="text" name="PromocodeExpiry"
	value="<?php echo $PromocodeExpiry1; ?>"/><br/><br>
	
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
				$PromocodeName = htmlentities($_POST['PromocodeName'], ENT_QUOTES);
				$PromocodePercent = htmlentities($_POST['PromocodePercent'], ENT_QUOTES);
				$PromocodeExpiry = htmlentities($_POST['PromocodeExpiry'], ENT_QUOTES);

				// check that firstname and lastname are both not empty
				if ($ProductName == '' || $PromocodeName == '' || $PromocodePercent == '' || $PromocodeExpiry == '' )
				{
					// if they are empty, show an error message and display the form
					$error = 'ERROR: Please fill in all required fields!';
					renderForm( $ProductName, $PromocodeName, $PromocodePercent, $PromocodeExpiry, $error, $ItemId);
				}
				else
				{
					// if everything is fine, update the record in the database
					if ($stmt = $mysqli->prepare("UPDATE Inventory SET ProductName = ?, PromocodeName = ?, PromocodePercent = ?, PromocodeExpiry = ?
					WHERE ItemId= ?"))
					{
						//echo "Update Successfull";
						$stmt->bind_param("ssssi", $ProductName, $PromocodeName, $PromocodePercent, $PromocodeExpiry, $ItemId);
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
				if($stmt = $mysqli->prepare("SELECT ItemId,ProductName,PromocodeName,PromocodePercent,PromocodeExpiry FROM Inventory WHERE ItemId=?"))
				{
					$stmt->bind_param("i",$ItemId);
					$stmt->execute();

					$stmt->bind_result($ItemId, $ProductName, $PromocodeName, $PromocodePercent, $PromocodeExpiry);
					$stmt->fetch();

					// show the form
					renderForm($ProductName, $PromocodeName, $PromocodePercent, $PromocodeExpiry, NULL, $ItemId);

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