

<?php
// connect to mysql database
$con = mysqli_connect("localhost", "root", "", "login") or die("Error " . mysqli_error($con));

// check if form is submitted
if (isset($_POST['submit']))
{
    $secretquestion = mysqli_real_escape_string($con, $_POST['secretquestion']);
    $secretanswer = mysqli_real_escape_string($con, $_POST['secretanswer']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
    $result = mysqli_query($con, "SELECT * FROM members WHERE secretquestion = '" . $secretquestion. "' and secretanswer = '" . $secretanswer. "' and email = '" . $email. "'");
    if (mysqli_num_rows($result) > 0)
	{ 
	echo "success";
        // login successful - start user session, store data in session & redirect user to index or dashboard page as per your need
        
        $row = mysqli_fetch_array($result);
		$email = $row['email'];
		$_SESSION['email']=$email;
		$id = $row['sellerid'];
		echo $id;
header("Location: sp2.php?sellerid=$id");
	}
	else
	{
		header("Location: sforgotpassword.php?err=true");
	}
}
?>