<?php

// connect to the database
include('connect-db.php');

// confirm that the 'id' variable has been set
if (isset($_GET['ItemId']) && is_numeric($_GET['ItemId']))
{
// get the 'id' variable from the URL
$ItemId = $_GET['ItemId'];

// delete record from database
if ($stmt = $mysqli->prepare("update Inventory set PromocodeName=' ', PromocodePercent=' ', PromocodeExpiry='0000-00-00' WHERE ItemId = ? LIMIT 1"))
{
$stmt->bind_param("i",$ItemId);
$stmt->execute();
$stmt->close();
}
else
{
echo "ERROR: could not prepare SQL statement.";
}
$mysqli->close();

// redirect user after delete is successful
header("Location: AdminDashboard1.php");
}
else
// if the 'id' variable isn't set, redirect the user
{
header("Location: AdminDashboard1.php");
}

?>