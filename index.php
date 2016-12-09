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
					<li class="hidden-xs"><a href="cart.php">My Cart</a></li>
                
                  <li style="font-size:16px; color:white;" class="hidden-xs">	
						<?php if(isset($_SESSION['username'])){
						echo "Welcome ";
						echo $_SESSION['username'];
						echo ',';
						echo "<a style='color:white' href=logout.php>Logout</a>";
							}else{
							echo "<a style='color:white' href=login.php>Login</a>";
					} ?> </li>
												   
					<div class="clear"></div>
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
				<li><a href="customer-support.php">Customer Support</a></li>
			</ul>
			
              
              
              
          
          </div><!--/.nav-collapse -->
        </div>
	<div class="clear"></div>
</div>
</div>


<!-- start slider -->
<div class="slider" style="float:center">
				<!---start-image-slider---->
				<div class="image-slider">
					 <div class="wrapper">
                <div id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
						<li>
                            <img src="images1/slider/img1.jpg" alt="image06"/>
                            <div class="ei-title1">
                            	<h3 class="btn">$80.99</h3>
                                <h2>Gloss Moderne<br>	High-Gloss Shampoo</h2>
                                <h3 class="active">Luxury haircare with technically advanced<br>
                                	ultra-prestige formulations with unparalleled efficacy.
                                </h3>
                                <h3>
                                	<a class="ei_icons" href="#"><img src="images1/icon_1.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_2.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_3.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_4.png" alt=""></a>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="images1/slider/img2.jpg" alt="image01" />
                            <div class="ei-title2">
                            	<h3 class="btn">$44.99</h3>
                                <h2>Dior <br>Diorshow Mascara	</h2>
                                <h3 class="active">A bestselling mascara with conditional formula<br>
                                	enriched with icrofibres for lash extension.
                                </h3>
                                <h3>
                                	<a class="ei_icons" href="#"><img src="images1/icon_1.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_2.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_3.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_4.png" alt=""></a>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="images1/slider/img3.jpg" alt="image02" />
                            <div class="ei-title">
                            	<h3 class="btn">$19.45</h3>
                                <h2>Deborah Lippmann <br>Iconic Treatment-enriched Nail Polish</h2>
                                <h3 class="active">Infused with treatment benefits from ingredients<br>
                                	such as biotin, green tea extract and aucoumea.
                                </h3>
                                <h3>
                                	<a class="ei_icons" href="#"><img src="images1/icon_1.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_2.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_3.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_4.png" alt=""></a>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="images1/slider/img4.png" alt="image03"/>
                            <div class="ei-title4">
                            	<h3 class="btn">$240</h3>
                                <h2>Kat Von D<br>Evarlasting Obsession Liquid Lipstick</h2>
                                <h3 class="active">A one-of-a-kind, collector's edition of top-selling<br>
                                	Evarlasting liquid lipstick in 13 favorite shades.]
                                </h3>
                                <h3>
                                	<a class="ei_icons" href="#"><img src="images1/icon_1.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_2.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_3.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_4.png" alt=""></a>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="images1/slider/img5.jpg" alt="image04"/>
                            <div class="ei-title4">
                            	<h3 class="btn">$34.99</h3>
                                <h2>Kat Von D<br>Shade+Light Contour Brush</h2>
                                <h3 class="active">Dual Ended Brush designed with angles end<br>
                                	for contouring and tapered end for highlightening.
                                </h3>
                                <h3>
                                	<a class="ei_icons" href="#"><img src="images1/icon_1.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_2.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_3.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_4.png" alt=""></a>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="images1/slider/img6.jpg" alt="image05"/>
                            <div class="ei-title2">
                            	<h3 class="btn">$64</h3>
                                <h2>Giorgio Armani Beauty<br>Luminous Silk Foundation</h2>
                                <h3 class="active">A lightweight liquid foundation with micro-fil<br>
                                	technology achieves a radiant, silky finish.
                                </h3>
                                <h3>
                                	<a class="ei_icons" href="#"><img src="images1/icon_1.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_2.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_3.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_4.png" alt=""></a>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="images1/slider/img7.jpg" alt="image07"/>
                            <div class="ei-title1">
                            	<h3 class="btn">$34.95</h3>
                                <h2>NARS<br>Audacious Lipstick</h2>
                                <h3 class="active">A debut weightless, color-saturated lipstick<br>
                                	with bold coverage and ultrasoft texture.
                                </h3>
                                <h3>
                                	<a class="ei_icons" href="#"><img src="images1/icon_1.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_2.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_3.png" alt=""></a>
                                	<a class="ei_icons" href="#"><img src="images1/icon_4.png" alt=""></a>
                                </h3>
                            </div>
                        </li>
                    </ul><!-- ei-slider-large -->
                    <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element">Current</li>
						<li>
							<a href="#">
								<span class="active">High Gloss Shampoo</span>
								<p>now of $80.99</p> 
							</a>
							<img src="images1/slider/img1.jpg" alt="thumb01" />
						</li>
                        <li class="hide"><a href="#"><span>Diorshow Mascara</span><p>Winter is coming</p> </a><img src="images1/slider/img2.jpg" alt="thumb01" /></li>
                        <li  class="hide1"><a href="#"><span>Deborah Nail Polish</span><p>Limited edition</p></a><img src="images1/slider/img3.jpg" alt="thumb02" /></li>
                        <li class="hide1"><a href="#"><span>Obsession Liquid Lipstick</span><p>All colors available</p> </a><img src="images1/slider/img4.png" alt="thumb03" /></li>
                        <li><a href="#"><span>Shade+Light Contour Brush</span><p>Free samples</p> </a><img src="images1/slider/img5.jpg" alt="thumb04" /></li>
                        <li><a href="#"><span>Silk Foundation</span><p>Limited edition</p> </a><img src="images1/slider/img6.jpg" alt="thumb05" /></li>
                        <li><a href="#"><span>NARS Audacious Lipstick</span><p>All colors available</p> </a><img src="images1/slider/img7.jpg" alt="thumb07" /></li>
                    </ul><!-- ei-slider-thumbs -->
                </div><!-- ei-slider -->
            </div><!-- wrapper -->
		</div>
		<!---End-image-slider---->	
</div>
<!-- start image1_of_3 -->
<div class="top_bg">
<div class="wrap">
<h2 style="color:white">Featured Products</h2>
<div class="main1">
	
	<div class="image1_of_3">
		<img src="images1/img1.jpg" alt=""/>
	    <a href="http://localhost/StayBeautiful/Prod_Desc.php?itemid=1"><span class="tag">on sale - 50% Off</span></a>
	</div>
	<div class="image1_of_3">
		<img src="images1/img2.jpg" alt=""/>
		<a href="http://localhost/StayBeautiful/Prod_Desc.php?itemid=2"><span class="tag">special offers-20% Off</span></a>
	</div>
	<div class="image1_of_3">
		<img src="images1/img3.jpg" alt=""/>
		<a href="http://localhost/StayBeautiful/Prod_Desc.php?itemid=3"><span class="tag">must have</span></a>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>


    <ul id="slides">
	<li class="slide"><img src="images1/carousel/2.jpg" width="100%" height="300"></li>
    <li class="slide showing"><img src="images1/carousel/1.png" width="100%" height="300"></li>
    <li class="slide"><img src="images1/carousel/3.jpg" width="100%" height="300"></li>
    <li class="slide"><img src="images1/carousel/4.png" width="100%" height="300"></li>
    <li class="slide"><img src="images1/carousel/5.jpg" width="100%" height="300"></li>
	<li class="slide"><img src="images1/carousel/6.jpg" width="100%" height="300"></li>
	<li class="slide"><img src="images1/carousel/7.jpg" width="100%" height="300"></li>
	
	</ul>
	<script type="text/javascript">
var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,2000);

function nextSlide() {
    slides[currentSlide].className = 'slide';
    currentSlide = (currentSlide+1)%slides.length;
    slides[currentSlide].className = 'slide showing';
}
</script>
	
<img src="images1/brands.jpg" style="display:block; margin: 0 auto;" >
  <a href="Search.php" style="text-align: center"><h2 id="intro"><Strong>Shop Now for Best deals and Free and Fast delievery</strong><h2></a>
 
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


<script type="text/javascript" src="js1/jquery.smartmenus.js"></script>
<script type="text/javascript" src="js1/jquery.smartmenus.bootstrap.js"></script> 

</body>
</html>