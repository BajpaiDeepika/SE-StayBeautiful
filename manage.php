<?php

	include("connect-db.php");
	
	function renderForm($CategoryId1 = '', $SubCategoryId1 = '', $Category1 = '', $SubCategory1 ='', $ProductName1 = '', $Description1 = '', $Quantity1 = '', $Price1 = '', $DiscountName1 = '', $PromocodeName1 = '', $Brand1 = '', $Color1 = '', $ImageLink1 = '', $ImageLinkF1 = '', $SellerName1 = '', $DiscountPercent1 = '', $DiscountExpiry1 = '', $PromocodePercent1 = '', $PromocodeExpiry1 = '', $error1 = '', $ItemId = '')
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

	<strong>CategoryId: *</strong> <input type="text" name="CategoryId"
	value="<?php echo $Category1; ?>"/><br/><br>
	<strong>SubCategoryId: *</strong> <input type="text" name="SubCategoryId"
	value="<?php echo $Category1; ?>"/><br/><br>
	<strong>Category: *</strong> <input type="text" name="Category"
	value="<?php echo $Category1; ?>"/><br/><br>
	<strong>Sub-Category: *</strong> <input type="text" name="SubCategory"
	value="<?php echo $SubCategory1; ?>"/><br><br>
	<strong>Product Name: *</strong> <input type="text" name="ProductName"
	value="<?php echo $ProductName1; ?>"/><br/><br>
	<strong>Description: *</strong> <input type="text" name="Description"
	value="<?php echo $Description1; ?>"/><br/><br>
	<strong>Quantity: *</strong> <input type="text" name="Quantity"
	value="<?php echo $Quantity1; ?>"/><br/><br>
	<strong>Price: *</strong> <input type="text" name="Price"
	value="<?php echo $Price1; ?>"/><br/><br>
	<strong>Discount Name: *</strong> <input type="text" name="DiscountName"
	value="<?php echo $DiscountName1; ?>"/><br/><br>
	<strong>Promocode Name: *</strong> <input type="text" name="PromocodeName"
	value="<?php echo $PromocodeName1; ?>"/><br/><br>
	<strong>Brand: *</strong> <input type="text" name="Brand"
	value="<?php echo $Brand1; ?>"/><br/><br>
	<strong>Color: *</strong> <input type="text" name="Color"
	value="<?php echo $Color1; ?>"/><br/><br>
	<strong>Image Link: *</strong> <input type="text" name="ImageLink"
	value="<?php echo $ImageLink1; ?>"/><br/><br>
	<strong>Image Link Full Size: *</strong> <input type="text" name="ImageLinkF"
	value="<?php echo $ImageLinkF1; ?>"/><br/><br>
	<strong>Seller Username: *</strong> <input type="text" name="SellerName"
	value="<?php echo $SellerName1; ?>"/><br/><br>
	
	<strong>Discount Percent: *</strong> <input type="text" name="DiscountPercent"
	value="<?php echo $DiscountPercent1; ?>"/><br/><br>
	<strong>Discount Expiry: *</strong> <input type="text" name="DiscountExpiry"
	value="<?php echo $DiscountExpiry1; ?>"/><br/><br>
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
				$CategoryId = htmlentities($_POST['CategoryId'], ENT_QUOTES);
				$SubCategoryId = htmlentities($_POST['SubCategoryId'], ENT_QUOTES);
				$Category = htmlentities($_POST['Category'], ENT_QUOTES);
				
				$SubCategory = htmlentities($_POST['SubCategory'], ENT_QUOTES);
				$ProductName = htmlentities($_POST['ProductName'], ENT_QUOTES);
				$Description = htmlentities($_POST['Description'], ENT_QUOTES);
				$Quantity = htmlentities($_POST['Quantity'], ENT_QUOTES);
				$Price = htmlentities($_POST['Price'], ENT_QUOTES);
				$DiscountName = htmlentities($_POST['DiscountName'], ENT_QUOTES);
				$PromocodeName = htmlentities($_POST['PromocodeName'], ENT_QUOTES);
				$Brand = htmlentities($_POST['Brand'], ENT_QUOTES);
				$Color = htmlentities($_POST['Color'], ENT_QUOTES);
				$ImageLink = htmlentities($_POST['ImageLink'], ENT_QUOTES);
				$ImageLinkF = htmlentities($_POST['ImageLinkF'], ENT_QUOTES);
				$SellerName = htmlentities($_POST['SellerName'], ENT_QUOTES);
				$DiscountPercent = htmlentities($_POST['DiscountPercent'], ENT_QUOTES);
				$DiscountExpiry = htmlentities($_POST['DiscountExpiry'], ENT_QUOTES);
				$PromocodePercent = htmlentities($_POST['PromocodePercent'], ENT_QUOTES);
				$PromocodeExpiry = htmlentities($_POST['PromocodeExpiry'], ENT_QUOTES);
				
				$updatedprice = $Price - (($DiscountPercent/100)*$Price);
				

				// check that firstname and lastname are both not empty
				if ($CategoryId == '' || $SubCategoryId == '' || $Category == '' || $SubCategory == '' || $ProductName == '' || $Description == '' || $Quantity == '' || $Price == '' || $DiscountName == '' || $PromocodeName == '' || $Brand == '' || $Color == '' || $ImageLink == '' || $ImageLinkF == '' || $SellerName == '' || $DiscountPercent == '' || $DiscountExpiry == '' || $PromocodePercent == '' || $PromocodeExpiry == '')
				{
					// if they are empty, show an error message and display the form
					$error = 'ERROR: Please fill in all required fields!';
					renderForm($CategoryId, $SubCategoryId, $Category, $SubCategory, $ProductName, $Description, $Quantity, $Price, $DiscountName, $PromocodeName, $Brand, $Color, $ImageLink, $ImageLinkF, $SellerName, $DiscountPercent, $DiscountExpiry, $PromocodePercent, $PromocodeExpiry, $error, $ItemId);
				}
				else
				{
					// if everything is fine, update the record in the database
					if ($stmt = $mysqli->prepare("UPDATE Inventory SET CategoryId = ?, SubCategoryId = ?, Category = ?, SubCategory = ?, ProductName = ?, Description = ?, Quantity = ?, Price = ?, DiscountName = ?, PromocodeName = ?, Brand = ?, Color = ?, ImageLink = ?, ImageLinkF = ?, SellerName = ?, DiscountPercent = ?, DiscountExpiry = ?, PromocodePercent = ?, PromocodeExpiry = ?, UpdatedPrice = $updatedprice
					WHERE ItemId= ?"))
					{
						//echo "Update Successfull";
						$stmt->bind_param("sssssssssssssssssssi", $CategoryId, $SubCategoryId, $Category, $SubCategory, $ProductName, $Description, $Quantity, $Price, $DiscountName, $PromocodeName, $Brand, $Color, $ImageLink, $ImageLinkF, $SellerName, $DiscountPercent, $DiscountExpiry, $PromocodePercent, $PromocodeExpiry, $ItemId);
						$stmt->execute();
						$stmt->close();
					}
					// show an error message if the query has an error
					
					
							
					else
					{
						echo "ERROR: could not prepare SQL statement.";
					}
					
					

					// redirect the user once the form is updated
					header("Location: inventory-mgmt.php");
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
				if($stmt = $mysqli->prepare("SELECT ItemId,CategoryId,SubCategoryId,Category,SubCategory,ProductName,Description,Quantity,Price,DiscountName,PromocodeName,Brand,Color,ImageLink,ImageLinkF,SellerName,DiscountPercent,DiscountExpiry,PromocodePercent,PromocodeExpiry FROM Inventory WHERE ItemId=?"))
				{
					$stmt->bind_param("i",$ItemId);
					$stmt->execute();

					$stmt->bind_result($ItemId, $CategoryId, $SubCategoryId, $Category, $SubCategory, $ProductName, $Description, $Quantity, $Price, $DiscountName, $PromocodeName, $Brand, $Color, $ImageLink, $ImageLinkF, $SellerName, $DiscountPercent, $DiscountExpiry, $PromocodePercent, $PromocodeExpiry);
					$stmt->fetch();

					// show the form
					renderForm($CategoryId, $SubCategoryId, $Category, $SubCategory, $ProductName, $Description, $Quantity, $Price, $DiscountName, $PromocodeName, $Brand, $Color, $ImageLink, $ImageLinkF, $SellerName, $DiscountPercent, $DiscountExpiry, $PromocodePercent, $PromocodeExpiry, NULL, $ItemId);

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
				header("Location: inventory-mgmt.php");
			}
		}
	}
	$mysqli->close();
?>