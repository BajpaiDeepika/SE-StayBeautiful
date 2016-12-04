<?php
// connect to mysql database
$con = mysqli_connect("localhost", "root", "", "login") or die("Error " . mysqli_error($con));

// check if form is submitted
if (isset($_POST['submit']))
{
    $uemail = mysqli_real_escape_string($con, $_POST['name']);
    $upwd = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM admin WHERE name = '" . $uemail. "' and password = '" . $upwd . "'");

    if (mysqli_num_rows($result) > 0)
    {
        // login successful - start user session, store data in session & redirect user to index or dashboard page as per your need
        
        $row = mysqli_fetch_array($result);

        session_start();
        $_SESSION['name'] = $row['name'];
       // $_SESSION['sellername'] = $row['sellername'];
		//$sellerid=$row['sellerid'];
		$name=$row['name'];
//echo "<a href=BuyerDashboard.php?user_id=$userid>Product Details</a>";
        header("Location: AdminDashboard1.php?name=$name"); //change this
		//$pid=$nt[product_id];
//echo "<a href=product-detail.php?product_id=$pid>Product Details</a>";
    }
 else
    {
      // login failed
        header("Location: adminlogin.php?err=true");
		
    } 
	
}
?>