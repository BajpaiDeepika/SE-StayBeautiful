<?php
$con = mysqli_connect("localhost", "root", "", "login") or die("Error " . mysqli_error($con));
if(isset($_GET['userid']))
{
$id = $_GET['userid'];
echo $id;
}	
if(isset($_POST['password'])){
$password = $_POST['password'];
echo $password;


mysqli_query($con,"UPDATE members1 SET password='$password'
					WHERE userid= '$id'");
 header("Location: login.php");
}					
?>