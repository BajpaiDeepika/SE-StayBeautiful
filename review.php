<?php

$db_host = "localhost"; 
	$db_username = "root";   
	$db_pass = "";  
	$db_name = "StayBeautiful"; 
	 
	$conn=mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
	mysqli_select_db($conn,"$db_name") or die ("no database");
	include('rating.php')
	
?>
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
    <title>Review and Ratings</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
	<link href="css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    
    <script src="js/star-rating.min.js" type="text/javascript"></script>
   <style>
   
   input[type=text],input[type=email]{
	width:450px;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 16px;
font-family:raleway;
}
   textarea#feedback {
  width: 450px;
  height: 150px;
  display: block;
}

.fetch{
	text-align: center;
	font-size: 20px;
	color: white;
}

a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
	text-slign: center;
}
   
   
   </style>
   
</head>

<body style="background-color: #B2BABB">
 <br>
 <p style="text-align: center; font-size: 30px; font-weight: bold">Reviews and Ratings
</p> 
  	<br>
 <?php
	echo "<p style='text-align:center; font-size: 20px'>";
	$prod_id = $_GET['itemid'];
	echo "<a class='button' href='Prod_Desc.php?itemid=" .$prod_id. "'> Go to Product Description</a>";
	echo "</p>";
	?>

 <?php
	
	if($result = $conn->query("SELECT * FROM Review"))
						{
							
							//diplaying records in a table
							if($result->num_rows != 0)
							{
									while($row = mysqli_fetch_array($result)){
									
									echo "<p class='fetch'>";
									echo "$row[0] :"; echo "&nbsp";
									echo "$row[2]";
									echo "<br>";			
									echo "</p>";
									
									
									}
							}
						}
?>
 <?php $prod_id = $_GET['itemid']; 
 ?>
 <?php $res = getRatingByProductId($conn, $prod_id); ?>
 <br>
 <h4 style="text-align: center">Average Rating for this product: <?php echo "$res"; ?> </h4>
	<br>
	<h4 style="text-align: center; font-weight: bold"> Give your ratings:</h4> <br>
	<table border=1 align="center">
	<tr><td>
   
	<input value="<?= getRatingByProductId($conn, $prod_id); ?>" type="number" class="rating" min=0 max=5 step=0.1 data-size="md" data-stars="5" align="center" productId=<?php echo $prod_id ?>>
	</td></tr>
	</table>

	<script type="text/javascript">
        $(function(){
               $('.rating').on('rating.change', function(event, value, caption) {
                productId = $(this).attr('productId');
                $.ajax({
                  url: "rating.php",
                  dataType: "json",
                  data: {vote:value, productId:productId, type:'save'},
                  complete: function( data ) {
                     alert("rating saved");
                  },
              error: function(e) {
                // Handle error here
                console.log(e);
              },
              //timeout: 30000  
            });
              });

           


        });
    </script>
	
	<?php
	if(isset($_POST["submit"])){
		$prod_id=$_GET['itemid']; 
	$sql = "INSERT INTO Review (Name, Email, Review)
    VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["feedback"]."')";
	header("Location: Prod_Desc.php?itemid=$prod_id");

	if ($conn->query($sql) === TRUE) {
		echo "<script type= 'text/javascript'>alert('Review Submitted Successfully');</script>";
	} else {
	echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
	}
	$conn->close();
	}
	
	?>
	
	<h2 style="text-align: center">Add a Review</h2>
	
	<form action="" method="post" class="review">
	<div style="text-align: center">
		<label>Your Name : <br>	
		<input type="text" name="name" id="name" required="required" placeholder="Please Enter Your Name"/><br />
		</label><br>
		
		<label>Your Email : <br>
		<input type="email" name="email" id="email" required="required" placeholder="john123@gmail.com"/><br/>
		</label><br>
		
		<label>Your Review :
		<textarea id="feedback" name="feedback" required="required" placeholder="Please Enter Your Review"/></textarea>
		<br>
		<input type="submit" value=" Submit " name="submit"/><br />
		</label>
		<br>
		
	</div>	
	</form>
	
	
	
</body>
</html>