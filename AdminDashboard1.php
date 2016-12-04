<?php 


	$db_host = "localhost"; 
	$db_username = "root";   
	$db_pass = "";  
	$db_name = "StayBeautiful"; 
	 
	$conn=mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
	mysqli_select_db($conn,"$db_name") or die ("no database");
	
	$db_host = "localhost"; 
	$db_username = "root";   
	$db_pass = "";  
	$db_name = "login"; 
session_start();  
 

	 
	$conn=mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
	mysqli_select_db($conn,"$db_name") or die ("no database");
	

	?>
<!DOCTYPE HTML>
<html>
<head>
<title>StayBeautiful | Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>
<link href="css1/bootstrap.css" rel="stylesheet">   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css1/indexstyle.css" rel="stylesheet" type="text/css" media="all" />
<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
<!--- start-mmmenu-script---->
<script src="js1/jquery.min.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="css1/jquery.mmenu.all.css" />
<script type="text/javascript" src="js1/jquery.mmenu.js"></script>
		<script type="text/javascript">
			//	The menu on the left
			$(function() {
				$('nav#menu-left').mmenu();
			});
		</script>
<!-- start slider -->
	<link href="css1/slider.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js1/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="js1/easing.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
					animation			: 'center',
					autoplay			: true,
					slideshow_interval	: 3000,
					titlesFactor		: 0
                });
            });
        </script>
<!-- start top_js_button -->
<script type="text/javascript" src="js1/move-top.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
	  .carousel-inner > .item > img,
	  .carousel-inner > .item > a > img {
		  width: 30%;
		  
		  margin: auto;
	  }
	  </style>
	
</head>
<body>
<!-- start header -->
<div class="top_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images1/logo.jpg" alt="" height=125px width=150px;/></a>
		</div>
		 <div class="log_reg">
				<ul>
					
					
                
                  <li style="font-size:16px; color:white;" class="hidden-xs">	
						<?php if(isset($_SESSION['name'])){
						echo "Welcome ";
						echo $_SESSION['name'];
						echo ',';
						echo "<a style='color:white' href=logout.php>Logout</a>";
							}else{
							echo "<a style='color:white' href=login.php>Login</a>";
					} ?> </li>
												   
					<div class="clear"></div>
				</ul>
		</div>	
		<div class="web_search">
		 	<form action="SSearchResult.php" method="post" id="searchForm">
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
									<li><a href="S<?php echo $sub_row->Href;  ?>">
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
				<li><a href="customer-support.php">Customer Support</a></li>
			</ul>
			
              
              
              
          
          </div><!--/.nav-collapse -->
        </div>
	<div class="clear"></div>
</div>
</div>




   <!-- / menu -->
  <!-- Start slider -->
   <!-- / menu -->
  <!-- Start slider -->
			<section>
				<br>
				<center><h4>Manage Discount</h4></center>
					
					<?php
					
						
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "staybeautiful";
		
						$conn = new mysqli($servername, $username, $password, $dbname);
						if($conn->connect_error){
								die("Connection failed: " . $conn->connect_error);
						}
						$per_page = 6 ;
						if($result = $conn->query("SELECT ItemId,ProductName,DiscountName,DiscountPercent,DiscountExpiry FROM Inventory"))
							{
							
							//diplaying records in a table
							if($result->num_rows != 0)
							{
								$total_results = $result->num_rows;
								$total_pages = ceil($total_results / $per_page);

								if (isset($_GET['page']) && is_numeric($_GET['page']))
								{
									$show_page = $_GET['page'];

									if ($show_page > 0 && $show_page <= $total_pages)
									{
										$start = ($show_page -1) * $per_page;
										$end = $start + $per_page;
									}
									else	
									{
										$start = 0;
										$end = $per_page;
									}
								}
								else
								{
									$start = 0;
									$end = $per_page;
								}

								
								echo "<p> &nbsp <b>View Page:</b> ";
								for ($i = 1; $i <= $total_pages; $i++)
								{
									if (isset($_GET['page']) && $_GET['page'] == $i)
									{
										echo $i . " ";
									}
									else
									{
										echo "<a href='AdminDashboard1.php?page=$i'>$i</a> ";
									}
								}	
								echo "</p>";

								// display data in table
								echo "<table class='table' border='2' cellpadding='20' align='center'>";
								echo "<tr><th>Item ID</th><th>Product Name</th><th>Discount Name</th><th>Discount Percent</th><th>Discount Expiry</th><th>Manage(Edit)</th><th>Manage(Remove)</th></tr>";

								// loop through results of database query, displaying them in the table
								for ($i = $start; $i < $end; $i++)
								{

									if ($i == $total_results) { break; }

									$result->data_seek($i);
									$row = $result->fetch_row();
									echo "<tr>";
									echo "<td align='center'>" .$row[0]. "</td>";
									echo "<td align='center'>" .$row[1]. "</td>";
									echo "<td align='center'>" .$row[2]. "</td>";
									echo "<td align='center'>" .$row[3]. "</td>";
									echo "<td align='center'>" .$row[4]. "</td>";
									echo "<td class='manage' align='center'><a href='ManageDiscount.php?ItemId=" .$row[0]. "'>Edit</a></td>";
									echo "<td class='manage' align='center'><a href='DeleteDiscount.php?ItemId=" .$row[0]. "'>Delete</a></td>";
									echo "</tr>";
								}


								echo "</table>";
							}	
							else
							{
								echo "No results to display!";
							}
						}
						else
						{
								echo "Error: " . $conn->error;
						}
						$conn->close();
					?>
					<center><h4>Manage Promocode</h4></center>
					
					<?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "staybeautiful";
		
						$conn = new mysqli($servername, $username, $password, $dbname);
						if($conn->connect_error){
								die("Connection failed: " . $conn->connect_error);
						}
						$per_page = 6;
						if($result = $conn->query("SELECT ItemId, ProductName,PromocodeName,PromocodePercent,PromocodeExpiry FROM Inventory "))
							{
							
							//diplaying records in a table
							if($result->num_rows != 0)
							{
								$total_results = $result->num_rows;
								$total_pages = ceil($total_results / $per_page);

								if (isset($_GET['page']) && is_numeric($_GET['page']))
								{
									$show_page = $_GET['page'];

									if ($show_page > 0 && $show_page <= $total_pages)
									{
										$start = ($show_page -1) * $per_page;
										$end = $start + $per_page;
									}
									else	
									{
										$start = 0;
										$end = $per_page;
									}
								}
								else
								{
									$start = 0;
									$end = $per_page;
								}

								
								echo "<p> &nbsp <b>View Page:</b> ";
								for ($i = 1; $i <= $total_pages; $i++)
								{
									if (isset($_GET['page']) && $_GET['page'] == $i)
									{
										echo $i . " ";
									}
									else
									{
										echo "<a href='AdminDashboard1.php?page=$i'>$i</a> ";
									}
								}	
								echo "</p>";

								// display data in table
								echo "<table class='table' border='2' cellpadding='20' align='center'>";
								echo "<tr><th>Item ID</th><th>Product Name</th><th>Promocode Name</th><th>Promocode Percent</th><th>Promocode Expiry</th><th>Manage(Edit)</th><th>Manage(Remove)</th></tr>";

								// loop through results of database query, displaying them in the table
								for ($i = $start; $i < $end; $i++)
								{

									if ($i == $total_results) { break; }

									$result->data_seek($i);
									$row = $result->fetch_row();


									echo "<tr>";
									echo "<td align='center'>" .$row[0]. "</td>";
									echo "<td align='center'>" .$row[1]. "</td>";
									echo "<td align='center'>" .$row[2]. "</td>";
									echo "<td align='center'>" .$row[3]. "</td>";
									echo "<td align='center'>" .$row[4]. "</td>";
									echo "<td class='manage' align='center'><a href='ManagePromocode.php?ItemId=" .$row[0]. "'>Edit</a></td>";
									echo "<td class='manage' align='center'><a href='DeletePromocode.php?ItemId=" .$row[0]. "'>Delete</a></td>";
									echo "</tr>";
								}


								echo "</table>";
							}	
							else
							{
								echo "No results to display!";
							}
						}
						else
						{
								echo "Error: " . $conn->error;
						}
						$conn->close();
					?>
  
  <form action="inventory-mgmt.php" method="POST">
  <center><button class="button" type="submit" value="Report">Inventory Update</button></center>
  </form>
  <form action="YearlyReport.php" method="POST">
  <center><button class="button" type="submit" value="Report">Yearly Report</button></center>
  </form>
  <form action="SellerStatistics.php" method="POST">
  <center><button class="button" type="submit" value="Report">Seller Statistics</button></center>
  </form>
  </section>
   
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
                      <li><a href="landing.php">Home</a></li>
                      
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
 
  

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
  
  <!-- Custom js -->
  <script src="js/custom.js"></script> 
  <!-- Add to cart Jquery -->
  <script type="text/javascript" src="js/jquery.shop.js"></script>  

  </body>
</html>

