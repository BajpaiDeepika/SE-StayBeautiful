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
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->

    <!-- Main style sheet -->
    <link href="css/style1.css" rel="stylesheet"> 
<link href="css1/indexstyle.css" rel="stylesheet" type="text/css" media="all" />
	

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
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
					
					<!--  <li class="hidden-xs">Welcome <?php echo $_SESSION['username']; ?>,<a href="logout.php">Logout</a></li> -->
		<li class="hidden-xs">	
		<?php if(isset($_SESSION['username'])){
		echo "Welcome ";
		echo $_SESSION['username'];
		
		echo ',';
		echo "<a href=logout.php>Logout</a>";
			}
		else if(isset($_SESSION['sellername']))
		{
		echo "Welcome ";
						echo $_SESSION['sellername'];
						echo ',';
						echo "<a href=logout.php>Logout</a>";
			
		}	
		else if(isset($_SESSION['name']))
		{
		echo "Welcome ";
						echo $_SESSION['name'];
						echo ',';
						echo "<a href=logout.php>Logout</a>";
			
		}
		else {
			echo "<a href=login.php>Login</a>";
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
				<li><a href="customer-support.php">Customer Support</a></li>
			</ul>
			
              
              
              
          
          </div><!--/.nav-collapse -->
        </div>
	<div class="clear"></div>
</div>
</div>

  <!-- / menu -->
  <!-- Start slider -->
			<section>
			<div class="middle">
				<br>
				<h2 style="font-size: 25px">Welcome to Inventory Management!</h2>
					<br>
					<li><a href="" data-toggle="modal" data-target="#login-modal">
					<button class="add">Add a Product</button></a></li>
					
					<br><br>
					
					<?php
					
						
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "staybeautiful";
		
						$conn = new mysqli($servername, $username, $password, $dbname);
						if($conn->connect_error){
								die("Connection failed: " . $conn->connect_error);
						}
						
						$per_page = 8;
						if($result = $conn->query("SELECT * FROM Inventory ORDER BY ItemId"))
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
										echo "<a href='inventory-mgmt.php?page=$i'>$i</a> ";
									}
								}	
								echo "</p>";

								// display data in table
								echo "<table class='table' width=100% border='2' cellpadding='20'>";
								echo "<tr><th>Item ID</th><th>Category ID</th><th>Sub-Category ID</th><th>Category</th><th>Sub-Category</th><th>Product Name</th><th>Description</th><th>Quantity</th><th>Price</th><th>Discount Name</th><th>Promocode Name</th><th>Brand</th><th>Color</th><th>Image Link</th><th>Image Link Full Size</th><th>Seller Username</th><th>Discount Percent</th><th>Discount Expiry</th><th>Promocode Percent</th><th>Promocode Expiry</th><th>Updated Price After Discount</th><th>Manage(Edit)</th><th>Manage(Remove)</th></tr>";

								// loop through results of database query, displaying them in the table
								for ($i = $start; $i < $end; $i++)
								{

									if ($i == $total_results) { break; }

									$result->data_seek($i);
									$row = $result->fetch_row();


									echo "<tr>";
									echo "<td>" .$row[0]. "</td>";
									echo "<td>" .$row[1]. "</td>";
									echo "<td>" .$row[2]. "</td>";
									echo "<td>" .$row[3]. "</td>";
									echo "<td>" .$row[4]. "</td>";
									echo "<td>" .$row[5]. "</td>";
									echo "<td>" .$row[6]. "</td>";
									echo "<td>" .$row[7]. "</td>";
									echo "<td>" .$row[8]. "</td>";
									echo "<td>" .$row[9]. "</td>";
									echo "<td>" .$row[10]. "</td>";
									echo "<td>" .$row[11]. "</td>";
									echo "<td>" .$row[12]. "</td>";
									echo "<td>" .$row[13]. "</td>";
									echo "<td>" .$row[14]. "</td>";
									echo "<td>" .$row[15]. "</td>";
									echo "<td>" .$row[16]. "</td>";
									echo "<td>" .$row[17]. "</td>";
									echo "<td>" .$row[18]. "</td>";
									echo "<td>" .$row[19]. "</td>";
									echo "<td>" .$row[20]. "</td>";
									
									echo "<td class='manage'><a href='manage.php?ItemId=" .$row[0]. "'>Edit</a></td>";
									echo "<td class='manage'><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete.php?ItemId=" .$row[0]. "'>Delete</a></td>";
									

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
						
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "login";
		
						$conn2 = new mysqli($servername, $username, $password, $dbname);
						if($conn2->connect_error){
								die("Connection failed: " . $conn2->connect_error);
						}
						
						if(isset($_SESSION['name'])){
							echo "<a style='font-size:20px;color:blue' href='AdminDashboard1.php?name=admin'>Go Back to Admin Dashboard</a></td>";
						}
						else if(isset($_SESSION['sellername'])){
							$seller = $_SESSION['sellername'];
							
							$query = mysqli_query($conn2, "SELECT * FROM members WHERE sellername LIKE '%$seller'");
							$num_rows = mysqli_num_rows($query);
							while($row=mysqli_fetch_array($query)){
								$sellerid = $row['sellerid'];
							}
									
						
							echo "<a style='font-size:20px;color:blue' href='SellerDashboard.php?seller_id=" .$sellerid. "'>Go Back to Seller Dashboard</a></td>";
						
						}
						
						
						$conn->close();
						$conn2->close();

					?>
					<br> 
					</div>
				</section>
					
  <!-- / Products section -->
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
                      <li><a href="landing.htm">Home</a></li>
                                          
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

      <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Inventory Management</h4>
          <form class="aa-login-form" action="" method="post">
            <label for="">Item Id</label>
            <input type="text" name="ItemId" id="ItemId" required="required" placeholder="Enter Item Id">
			<label for="">Category Id</label>
            <input type="text" name="CategoryId" id="CategoryId" required="required" placeholder="Enter Category Id">
			<label for="">Sub-Category Id</label>
            <input type="text" name="SubCategoryId" id="SubCategoryId" required="required" placeholder="Enter Sub-Category Id">
			<label for="">Category Name</label>
            <input type="text" name="Category" id="Category" required="required" placeholder="Enter Category Name">
			<label for="">Sub-Category Name</label>
            <input type="text" name="SubCategory" id="SubCategory" required="required" placeholder="Enter Sub-Category Name">
			<label for="">Product Name</label>
            <input type="text" name="ProductName" id="ProductName" required="required" placeholder="Enter Product Name">
			<label for="">Description</label>
            <input type="text" name="Description" id="Description" required="required" placeholder="Enter Product Description">
			<label for="">Quantity</label>
            <input type="text" name="Quantity" id="Quantity" required="required" placeholder="Enter Quantity">
			<label for="">Price</label>
            <input type="text" name="Price" id="Price" required="required" placeholder="Enter Price">
			<label for="">Discount Name</label>
            <input type="text" name="DiscountName" id="DiscountName" required="required" placeholder="Enter Discount Name">
			<label for="">Promocode Name</label>
            <input type="text" name="PromocodeName" id="PromocodeName" required="required" placeholder="Enter Promocode Name">
			<label for="">Brand</label>
            <input type="text" name="Brand" id="Brand" required="required" placeholder="Enter Brand">
			<label for="">Color</label>
            <input type="text" name="Color" id="Color" required="required" placeholder="Enter Color">
			<label for="">Image link</label>
            <input type="text" name="ImageLink" id="ImageLink" required="required" placeholder="Enter Image link">
			<label for="">Image link Full Size</label>
            <input type="text" name="ImageLinkF" id="ImageLinkF" required="required" placeholder="Enter Image link Full Size">		
			<label for="">Seller Username</label>
            <input type="text" name="SellerName" id="SellerName" required="required" placeholder="Enter Seller Username">
			
			<label for="">Discount Percent</label>
            <input type="text" name="DiscountPercent" id="DiscountPercent" required="required" placeholder="Enter Discount Percent">
			<label for="">Discount Expiry</label>
            <input type="text" name="DiscountExpiry" id="DiscountExpiry" required="DiscountExpiry" placeholder="Enter Discount Expiry">
			<label for="">Promocode Percent</label>
            <input type="text" name="PromocodePercent" id="PromocodePercent" required="required" placeholder="Enter Promocode Percent">
			<label for="">Promocode Expiry</label>
            <input type="text" name="PromocodeExpiry" id="PromocodeExpiry" required="required" placeholder="Enter Promocode Expiry">
			
			<input type="submit" value="Add" name="submit"/><br/>
            <br><br><br>
           
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>  

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
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 

  <?php
  
	if(isset($_POST["submit"])){
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "staybeautiful";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		if($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}
		
		$updatedprice =  $_POST['Price'] - ($_POST['DiscountPercent']/100)*($_POST['Price']);
		
		$sql = "INSERT INTO Inventory (ItemId, CategoryId, SubCategoryId, Category, SubCategory, Productname, Description, Quantity, Price, DiscountName, PromocodeName, Brand, Color, ImageLink, ImageLinkF, SellerName, DiscountPercent, DiscountExpiry, PromocodePercent, PromocodeExpiry, UpdatedPrice)
		VALUES ('".$_POST["ItemId"]."', '".$_POST["CategoryId"]."', '".$_POST["SubCategoryId"]."', '".$_POST["Category"]."', '".$_POST["SubCategory"]."', '".$_POST["ProductName"]."', '".$_POST["Description"]."', '".$_POST["Quantity"]."', '".$_POST["Price"]."', '".$_POST["DiscountName"]."', '".$_POST["PromocodeName"]."', '".$_POST["Brand"]."', '".$_POST["Color"]."', '".$_POST["ImageLink"]."', '".$_POST["ImageLinkF"]."', '".$_POST["SellerName"]."', '".$_POST["DiscountPercent"]."', '".$_POST["DiscountExpiry"]."', '".$_POST["PromocodePercent"]."', '".$_POST["PromocodeExpiry"]."', '$updatedprice')";
		
		
		if($conn->query($sql) == TRUE){
			echo "<script type= 'text/javascript'>alert('New Product Added Successfully');</script>";
		}
		else{
			echo "<script type= 'text/javascript'>alert('Error: " .$sql. "<br>" .$conn->error."');</script>";
		}
		
		
		
		

		$sql2="INSERT INTO Menu SELECT CategoryId,Category FROM Inventory WHERE NOT EXISTS
		(SELECT * FROM Menu WHERE (Inventory.CategoryId=Menu.MenuId))";
		if($conn->query($sql2) == TRUE){
			echo "<script type= 'text/javascript'>alert('New Product Added Successfully');</script>";
		}
		else{
			echo "<script type= 'text/javascript'>alert('Error: " .$sql. "<br>" .$conn->error."');</script>";
		}
		
		$sql3="INSERT INTO SubMenu SELECT SubCategoryId,SubCategory,'',CategoryId FROM Inventory WHERE NOT EXISTS
		(SELECT * FROM SubMenu WHERE (Inventory.SubCategoryId=SubMenu.SubId))";
		
		if($conn->query($sql3) == TRUE){
			echo "<script type= 'text/javascript'>alert('New Product Added Successfully');</script>";
		}
		else{
			echo "<script type= 'text/javascript'>alert('Error: " .$sql. "<br>" .$conn->error."');</script>";
		}
		
		$conn->close();
		
	}
  
  
  ?>
  
  </body>
</html>