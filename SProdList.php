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
 

	 
	$conn1=mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
	mysqli_select_db($conn1,"$db_name") or die ("no database");
	
	
	
	

?>



<!DOCTYPE html>
<html lang="en">
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
<style>
	label {
		
		width: 10em;
		margin-right: 1em;
		text-align: right;
		}
</style
  </head>
 <?php
$i= $_GET["clicked"]; //Or do whatever you want
?>
 
  <body> 
  
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i>Top</a>
  <!-- END SCROLL TOP BUTTON -->

  <div id="site">

  <!-- start header -->
<div class="top_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images1/logo.jpg" alt="" height=125px width=150px;/></a>
		</div>
		 <div class="log_reg">
				<ul>
					 
					<!--  <li class="hidden-xs">Welcome <?php echo $_SESSION['username']; ?>,<a href="logout.php">Logout</a></li> -->
		<li style="font-size:16px; color:white;" class="hidden-xs">	
		<?php if(isset($_SESSION['username'])){
		echo "Welcome ";
		echo $_SESSION['username'];
		
		echo ',';
		echo "<a style='color:white' href=logout.php>Logout</a>";
			}
		else if(isset($_SESSION['sellername']))
		{
		echo "Welcome ";
						echo $_SESSION['sellername'];
						echo ',';
						echo "<a style='color:white' href=logout.php>Logout</a>";
			
		}	
		
		else if(isset($_SESSION['name']))
				{
				echo "Welcome ";
								echo $_SESSION['name'];
								echo ',';
								echo "<a style='color:white' href=logout.php>Logout</a>";
					
				}
		
		
		else {
			echo "<a style='color:white' href=login.php>Login</a>";
			} ?> </li> 
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
    
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
			
			<!-- Sidebar -->
			<div id="sidebar">
			  <!-- Search -->
			  <div class="box search">
				<h2>Filter by <span></span></h2>
				<div class="box-content">
				  <form action="SearchResult.php" method="post">
					<label>Keyword</label>
					<input type="text" name="key" class="field" />
					
					<label>Item Name</label>
					<input type="text" name="item" class="field" />
					
					<label>Brand</label>
					<input type="text" name="brand" class="field" />
					
					<label>Seller Name</label>
					<input type="text" name="seller" class="field" />
					
					<label>Max Price</label>
					<input type="text" name="maxP" class="field" />
					
					<label>Min Price</label>
					<input type="text" name="minP" class="field" />
					
					
							
					<input type="submit" class="search-submit" value="Search" />
					</form>
					</div>
				</div>
			</div>
			
			
			
			
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <br>
                  <!-- Tab panes -->
                  <div id="content">
					<div id="products">
                      <ul >
									
                          
                          
                        
                        <!-- start single product item -->
                        <?php
						$query=mysqli_query($conn,"Select * FROM Inventory WHERE Category LIKE '%$i%' OR SubCategory LIKE '%$i%'");
						$num_rows=mysqli_num_rows($query);
						while ($row=mysqli_fetch_array($query))
						{
							$prodname=$row['ProductName'];
							$price=$row['Price'];
							$priceU=$row['UpdatedPrice'];
							$image=$row['ImageLink'];
							$ItemId=$row['ItemId'];
							$url1='SProd_Desc.php';
							$url1 .= "?" . 'itemid' . "=" . $ItemId;
							
							?>

			             <li>
								<div class="product-image" >
									<a href=<?php echo $url1 ?>><img src=<?php echo $image ?> alt="" /></a>
								</div>
									<div class="product-description" data-name=<?php echo $prodname ?> data-price="<?php echo $priceU ?>">
										<h3 class="product-name"><?php echo $prodname ?></h3>
										<p class="product-price">$ <?php echo $priceU ?></p>
										<form class="add-to-cart" action="" method="post">
											<div>
												<label for="qty-1">Quantity</label>
												<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
											</div>
											
										</form>
									</div>                       
                          
                          </li>
						  <?php
						}
	?>
                          
                        
                      </ul>
                      <a class="aa-browse-btn" href="Search.php">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    
                            
                     
                             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div>
  
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

