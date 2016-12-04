<?php
// connect to mysql database
$con = mysqli_connect("localhost", "root", "", "login") or die("Error " . mysqli_error($con));

// check if form is submitted
if (isset($_POST['submit']))
{
    $uemail = mysqli_real_escape_string($con, $_POST['email']);
    $upwd = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM members1 WHERE email = '" . $uemail. "' and password = '" . $upwd . "'");

    if (mysqli_num_rows($result) > 0)
    {
        // login successful - start user session, store data in session & redirect user to index or dashboard page as per your need
        
        $row = mysqli_fetch_array($result);

        session_start();
        $_SESSION['user_id'] = $row['userid'];
        $_SESSION['username'] = $row['username'];
		$userid=$row['userid'];
		$username=$row['username'];
//echo "<a href=BuyerDashboard.php?user_id=$userid>Product Details</a>";
        header("Location: BDashboard.php?user_id=$userid"); //change this
		//$pid=$nt[product_id];
//echo "<a href=product-detail.php?product_id=$pid>Product Details</a>";
    }
    else
    {
        // login failed
        header("Location: userlogin.php?err=true");
		
    }
}
?>