<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "staybeautiful";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		if($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}
		
		
	

	$db_host = "localhost"; 
	$db_username = "root";   
	$db_pass = "";  
	$db_name = "login"; 
	session_start();  
 

	 
	$conn1=mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
	mysqli_select_db($conn1,"$db_name") or die ("no database");
	if (isset($_SESSION['username']))
	{
		$username=$_SESSION['username'];
	}
	
	

	
	
	


        if (isset($_POST['tbl'])) {
            //if the page has been submitted, append the rows
			 
			 $myArray = explode(',', $_POST['tbl']);
			 array_splice($myArray, 0, 1);
			 $arrlength = count($myArray);
			 
			 $orderid=rand();

			$Total=0;
			 
			 for($i = 0; $i <$arrlength; $i += 3){
					
					if (($i+1 < $arrlength)and($i+2 < $arrlength)) {
						$name = $myArray[$i];
					$qty = $myArray[$i+1];
					$pric = $myArray[$i+2];
					$price1=substr($pric,2);
					$price=intval($price1);
					
					$TotalPrice=$qty*$price;
						
					$Total=$Total+$TotalPrice;
						
						$sql = "INSERT INTO orderconfirmation (username,OrderId,Productname, Quantity, Price,TotalPrice,Date)VALUES ('$username','$orderid','$name','$qty','$price',$TotalPrice,now())";
						if($conn->query($sql) == TRUE){
			
							}
							else{
								echo "Some error encpuntered";
							}
		
					}

			 }
				}
			
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>StayBeautiful | Home</title>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
	
	<link href="css1/indexstyle.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--- start-mmmenu-script---->
	<script src="js1/jquery.min.js" type="text/javascript"></script>
	<link type="text/css" rel="stylesheet" href="css1/jquery.mmenu.all.css" />
	<script type="text/javascript" src="js1/jquery.mmenu.js"></script>
	<script type="text/javascript" src="js/jquery.shop.js"></script> 
		<script type="text/javascript">
			//	The menu on the left
			$(function() {
				$('nav#menu-left').mmenu();
			});
		</script>

	<script language="JavaScript">
	<!--
	function euroConverter(){
	document.converter.dollar.value = document.converter.euro.value * 1.08
	document.converter.pound.value = document.converter.euro.value * 0.86
	document.converter.inr.value = document.converter.euro.value * 72.81
	}
	function dollarConverter(){
	document.converter.euro.value = document.converter.dollar.value * 0.93
	document.converter.pound.value = document.converter.dollar.value * 0.80
	document.converter.inr.value = document.converter.dollar.value * 67.71
	}
	function poundConverter(){
	document.converter.dollar.value = document.converter.pound.value * 1.25
	document.converter.euro.value = document.converter.pound.value * 1.16
	document.converter.inr.value = document.converter.pound.value * 84.42
	}
	function inrConverter(){
	document.converter.dollar.value = document.converter.inr.value * 0.015
	document.converter.pound.value = document.converter.inr.value * 0.012
	document.converter.euro.value = document.converter.inr.value * 0.014
	}
//-->
</script>


  </head>
  <body onload="loadImage()">
      
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i>Top</a>
  <!-- END SCROLL TOP BUTTON -->
  
  <!-- END SCROLL TOP BUTTON -->


  <!-- start header -->
<div class="top_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images1/logo.jpg" alt="" height=125px width=150px;/></a>
		</div>
		 <div class="log_reg">
				<ul>
					<li class="hidden-xs"><a href="cart.php">My Cart</a></li>
                
                  <!--  <li class="hidden-xs">Welcome <?php echo $_SESSION['username']; ?>,<a href="logout.php">Logout</a></li> -->
		<li style="font-size:16px; color:white;" class="hidden-xs">	
		<?php if(isset($_SESSION['username'])){
		echo "Welcome ";
		echo $_SESSION['username'];
		
		echo ',';
		echo "<a style='color:white' href=logout.php>Logout</a>";
			}else{
			echo "<a style='color:white' href=login.php>Login</a>";
			} ?> </li> 
				</ul>
		</div>	
		<div class="web_search">
		 	<form action="SearchResult.php" method="post" id="searchForm">
                  <input type="text" name="q" id="searchbox" placeholder="Search here ex. 'MakeUp' " maxlength="25" >
                  <button type="submit" >Go!<span class="fa fa-search"></span></button>
                </form>
	    </div>						
		<div class="clear"></div>
	</div>	
</div>
</div>
<!-- start header_btm -->

<?php
	
	$pdo = new PDO("mysql:host=localhost;dbname=staybeautiful",'root','');
	
	$sql = "SELECT * FROM Menu ORDER BY MenuId";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();

?>

<div class="wrap">
<div class="header_btm">
		
		 <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
			<ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li>
				<?php
					while ($row = $stmt->fetch(PDO::FETCH_OBJ)){
						$sub_sql = "SELECT * FROM Submenu WHERE CatId=:MenuId";
						$sub_stmt = $pdo->prepare($sub_sql);
						$sub_stmt->bindParam(':MenuId',$row->MenuId,PDO::PARAM_INT);
						$sub_stmt->execute();
						
						?>
						<li><a href=""><?php echo $row->MenuName; ?></a>
						<?php
						if($sub_stmt->rowCount()){
							?>
							<ul class="dropdown-menu">
								<?php
								while($sub_row = $sub_stmt->fetch(PDO::FETCH_OBJ)){
									?>
									<li><a href="<?php echo $sub_row->Href;  ?>">
									<?php echo $sub_row->SubName;  ?>
									
									</a></li>
									<?php
								}
								
								
								?>
							
							</ul>
							<?php
						}
						?>
						</li>
						<?php
					}
					
			
			
				?>
				<li><a href="customer-support.html">Customer Support</a></li>
			</ul>
			
              
              
              
          
          </div><!--/.nav-collapse -->
        </div>
	<div class="clear"></div>
</div>
</div>

<!-- Menu End -->
 
  <!-- Order Confirmation section -->
  <div id="site">
  <div id="content">
  <section id="aa-catg-head-banner" style="min-height:100%; min-width: 100% ; ">
  
  
	<h2 style="margin-left:10px;" >Order Confirmation Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>                   
          <li style="margin-left:10px;" class="active">Order Confirmation</li>
        </ol>
   
	<p style="margin-left:10px;"> Congratulations! Your order has beeen placed succesfully.
	Expect your product to get delievered within 5 business days.
	The tracking information will be sent to you shortly..</p>
	
	
	
	<p style="margin-left:10px;"><strong> Order Id: <?php echo $orderid ?> </p>
	<p style="margin-left:10px;"><strong> Your Total Cost: $ <?php echo $Total ?> </p>
	</br>
	<h4>Currency Convertor</h4>
	<form name="converter">
		<table border="0">
		<tr>
		<td>US Dollar:($) </td><td><input type="text" value="<?php echo $Total ?>" name="dollar" onChange="dollarConverter()" /></td>
		</tr>
		<tr>
		<td>Euro:(€) </td><td><input type="text" name="euro" onChange="euroConverter()" /></td>
		</tr>
		<tr>
		<td>British Pound:(£)</td><td><input type="text" name="pound" onChange="poundConverter()" /></td>
		</tr>
		<tr>
		<td>Indian Rupee:(₹) </td><td><input type="text" name="inr" onChange="inrConverter()" /></td>
		</tr>
		<tr>
		<td colspan="2" align="center"><input type="button" value="Convert!"  onclick="dollarConverter()" /></td>
		</tr>
		</table>
	</form>
	<p> [Note: Current Rates: 1USD=0.93 Euro=67.71 INR=0.80 Pound] </p>
	
		
  </section>
  <button type="submit" name="delete" id="empty-cart" class="btn" value="delorder" style="display:none;"/>
  </div>
  </div>
  

<!-- Order Confirmation section -->
 


<br/><br/><br/><br/><br/><br/><br/>


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
                      <li><a href="landing.html">Home</a></li>
                      
                      <li><a href="customer-support.html">Customer Support</a></li>
                      
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

  

  <!-- jQuery library -->

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
   




<script>
function loadImage() {
	debugger;
     $('#empty-cart').click();
}
</script>
  </body>
</html>