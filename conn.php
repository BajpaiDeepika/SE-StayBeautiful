<?php
$link = mysqli_connect("localhost","root",'','login')  or die("failed to connect to server !!");
mysqli_select_db($link,"login");
//if(isset($_REQUEST['submit']))
//{
$errorMessage = "";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['password'];
$secretquestion=$_POST['secretquestion'];
$secretanswer=$_POST['secretanswer'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zipcode'];
$phone=$_POST['phone'];
$email=$_POST['email'];
 
// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `login`.`members1`
(`firstname`, `lastname`, `username`, `password`,`secretquestion`, `secretanswer`, `address`,
`city`, `state`, `zip`, `phone`, `email`) VALUES ('$firstname', '$lastname', '$username', '$password', '$secretquestion', '$secretanswer', 
'$address', '$city', '$state', '$zip', '$phone', '$email')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
  header("Location: login.php?err=true");
}
//}
?>