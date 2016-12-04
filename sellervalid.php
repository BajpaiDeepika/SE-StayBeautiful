<?php
// connect to mysql database
$con = mysqli_connect("localhost", "root", "", "login") or die("Error " . mysqli_error($con));

// check if form is submitted
if (isset($_POST['submit']))
{
    $uemail = mysqli_real_escape_string($con, $_POST['email']);
    $upwd = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM members WHERE email = '" . $uemail. "' and password = '" . $upwd . "'");

    if (mysqli_num_rows($result) > 0)
    {
        // login successful - start user session, store data in session & redirect user to index or dashboard page as per your need
        
        $row = mysqli_fetch_array($result);

        session_start();
        $_SESSION['seller_id'] = $row['sellerid'];
        $_SESSION['sellername'] = $row['sellername'];
		$sellerid=$row['sellerid'];
		$username=$row['sellername'];
//echo "<a href=BuyerDashboard.php?user_id=$userid>Product Details</a>";
        header("Location: SellerDashboard.php?seller_id=$sellerid"); //change this
		//$pid=$nt[product_id];
//echo "<a href=product-detail.php?product_id=$pid>Product Details</a>";
    }
   else
    {
      // login failed
        header("Location: sellerlogin.php?err=true");
		
    } 
}
?>