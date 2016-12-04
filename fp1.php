
<?php
// connect to mysql database
$con = mysqli_connect("localhost", "root", "", "login") or die("Error " . mysqli_error($con));

// check if form is submitted
if (isset($_POST['submit']))
{
    $secretquestion = mysqli_real_escape_string($con, $_POST['secretquestion']);
    $secretanswer = mysqli_real_escape_string($con, $_POST['secretanswer']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	echo $email;
    $result = mysqli_query($con, "SELECT * FROM members1 WHERE secretquestion = '" . $secretquestion. "' and secretanswer = '" . $secretanswer. "' and email = '" . $email. "'");
    if (mysqli_num_rows($result) > 0)
	{ 
	echo "success";
        // login successful - start user session, store data in session & redirect user to index or dashboard page as per your need
        
        $row = mysqli_fetch_array($result);
		$id = $row['userid'];
		echo $id;
header("Location: fp2.php?userid=$id");
	}
	else
	{
        header("Location: forgotpassword.php?err=true");
	}
}
?>