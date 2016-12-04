<?php 

$db_host = "localhost"; 
	$db_username = "root";   
	$db_pass = "";  
	$db_name = "login"; 
session_start();  
 

	 
	$conn=mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
	mysqli_select_db($conn,"$db_name") or die ("no database");
	
	
	
	?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>StayBeautiful | Home</title>
    
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    
	
    
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	
	<!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  </head>

<body id="checkout-page">

<div id="site">
	<!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                

                <!-- start currency -->

                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
				
                  <p><span class="fa fa-phone"></span>+1 812 349 8733</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  
                  <li class="hidden-xs"><a href="cart.php">My Cart</a></li>
                
                  <!--  <li class="hidden-xs">Welcome <?php echo $_SESSION['username']; ?>,<a href="logout.php">Logout</a></li> -->
		<li style="font-size:16px; color:black;" class="hidden-xs">	
		<?php if(isset($_SESSION['username'])){
		echo "Welcome ";
		echo $_SESSION['username'];
		
		echo ',';
		echo "<a style='color:black' href=logout.php>Logout</a>";
			}else{
			echo "<a style='color:black' href=login.php>Login</a>";
			} ?> </li> 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.php">
                  <span> <a href="index.php"><img src="img/logo.jpg" alt="logo img" height=100px width=100px></a></span>
                  
                </a>
                
              </div>
            
                           
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <form action="" id="checkout-order-form"">
                    <h2>Payment details</h2>
                          <fieldset id="fieldset-billing">
							<legend >Payment Details</legend>
							<div>
								<label for="Cname"> Name</label>
								<input type="text" name="Cname" id="Cname" data-type="string" data-message="This field cannot be empty"  required/>
							</div>
							<div>
								<label for="Cnumber">Card Number</label>
								<input type="text" name="Cnumber" id="Cnumber" data-type="string" data-message="Not a valid email address" onkeypress='validate(event)' required />
								
							</div>
							<div>
								<label for="cvv">Card CVV</label>
								<input type="text" name="cvv" id="cvv" data-type="string" data-message="This field cannot be empty" onkeypress='validate(event)'required />
							</div>
							<div>
								<label for="expiry">Card Expiry</label>
								<input type="text" name="expiry" id="expiry" data-type="string" data-message="This field cannot be empty" required />
							</div>
							
						</fieldset> 
                          
                                                         
                       
		 
		  </form>
	<div id="content">

		<h1>Your Order Summary</h1>
			<table id="checkout-cart" class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  		<?php
        if (isset($_POST['data_rows'])) {
            //if the page has been submitted, append the rows
            echo $_POST['data_rows'];
        }
        ?>
			  
			  </tbody>

			</table>
			
			<button id="submit_data" type="submit" >Place Order!<span class="fa fa-search"></span></button>
		 <div id="pricing">
			
			<p id="shipping">
				<strong>Shipping</strong>: <span id="sshipping"></span>
			</p>
			
			<p id="sub-total">
				<strong>Total</strong>: <span id="stotal"></span>
			</p>
		 </div>
		 
		 <div id="user-details">
		 	<h1 style="font-color:#57C5A0; text-align:center;">Your Data</h1>
		 	<div id="user-details-content"></div>
		 </div>
		 

	
	

</div>
</div>

<!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="index.php">Home</a></li>
                      
                      <li><a href="customer-support.php">Customer Support</a></li>
                      
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p> 107 S Indiana Ave, Bloomington, IN 47405</p>
                      <p><span class="fa fa-phone"></span>+1 812-349-8724</p>
                      <p><span class="fa fa-envelope"></span>staybeautiful@gmail.com</p>
					  
                    </address>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Designed by Group 1</a></p>
            
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->
 
  

  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 
  <!-- Add to cart Jquery -->
  <script type="text/javascript" src="js/jquery.shop.js"></script>  
  
<script>
    $(document).ready(function() {
        $('#submit_data').click(function() {
			
            //Get raw HTML of tbody in the data table
            var tbl = $('#checkout-cart tr').get().map(function(row) {
  return $(row).find('td').get().map(function(cell) {
    return $(cell).html();
  });
});
            //build form HTML (hide keeps the form from being visible)
            $form = $('<form/>').attr({method: 'POST', action: 'OrderConfirm.php'}).hide();
            //build textarea HTML
            $textarea = $('<textarea/>').attr({name: 'tbl'}).val(tbl);
            //add textarea to form
            $form.append($textarea);
            //add form to the document body
            $('body').append($form);
			
			//debugger;
			//$('#delete-cart').click();
            //submit the form
            $form.submit();
        });
    });
</script>

  </body>
</html>