<?php
$con = mysqli_connect("localhost", "root", "", "login") or die("Error " . mysqli_error($con));
if(isset($_GET['sellerid']))
{
$id = $_GET['sellerid'];
echo $id;
}	
if(isset($_POST['password'])){
$password = $_POST['password'];

mysqli_query($con,"UPDATE members SET password='$password'
					WHERE sellerid= '$id'");
 header("Location: login.php");
}					
?>