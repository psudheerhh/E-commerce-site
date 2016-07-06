<?php 
session_start();
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>

<?php
$db = new PDO('mysql:host=localhost;port=8889;dbname=bookcart;charset=utf8mb4','sudheer','sudheer');
$q = $db->query("SELECT * FROM cart");
$q->setFetchMode(PDO::FETCH_ASSOC);
$result = $q->fetchAll(PDO::FETCH_ASSOC);
$Totalcost=0;
foreach ($result as $r) 
{
  	 $Totalcost = $Totalcost + $r['cost']; 	 
} 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Order Confirmation Page</title>
	<meta name = "viewport" content="width=device-width, intial-scale =1.0">
	<!-- put favicon over here -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div id = "wrapper">
			<div class = "callout">
				<p><b><a href = "home.php">  <img src="logo1.png" alt="logo"></a></b></p>
			</div>
			<div class = "callout-below">
			<?php 
			$db = new PDO('mysql:host=localhost;port=8889;dbname=bookcart;charset=utf8mb4','sudheer','sudheer');
			$Email = $_SESSION[Email];
			//echo $Email;
			$sql= "SELECT * FROM login WHERE Email='$Email'";
			$stmt = $db->query($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if (isset($_SESSION["Email"])){
			echo '<p> <b> <a href = "home.php">'.$result[0]['firstname'].'</a> </b>|<b> <a href = "sign-out.php">Sign-Out</a> </b> | <b><a href= "confirmationpage.php"> Cart <img src="cart.png" alt="cart"></a> </b></p>';
			} else{
			echo '<p> <b> <a href = "login.html">login</a> </b>| <b> <a href = "sign-up.html">Sign-Up</a> </b>|<b><a href= "login.html">   Cart  <img src="cart.png" alt="cart"></a> </b> </p>';
			}
			?>
			</div>
			<header>
				<br/>
			</header>
			<nav>
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="literature.php">Literature</a></li>
					<li><a href="fiction.php">Fiction</a></li>
					<li><a href="academic.php">Academic</a></li>
					<li><a href="confirmationpage.php">Cart</a></li>
				</ul>	
				<div class ="clearfix"></div>
			</nav>
			<div class = "banner">	
				<a href="#"><img src="book1.jpg" alt="mainImage"/></a>
			</div>
				<br/>
				<br/>
				
				<div>
					<div class ="section1">
				<h3 style="background-color:#FEEA01;color:#1f95db;">Item</h3>

				<div>
					<?php foreach ($result as $r) {
					
  					echo '<p class="align-left"> &emsp; &emsp;'.$r[bookname].'</p>';
					} ;
					?>
					<hr>
			     	<p class="align-left">&emsp; &emsp;Total </p>
				
					<br/>
				</div>
			</div>
			
			<div class ="section1">
				<h3 style="background-color:#FEEA01;color:#1f95db;">Quantity</h3>
				
				
				<?php foreach ($result as $r) {
  					echo '<p class="align-left">&emsp; &emsp; 1 </p>';
  					};
					?>
					<hr>
					<br/>
			</div>
			
			<div class ="section1">
				<h3 style="background-color:#FEEA01;color:#1f95db;">Item Price</h3>
					
					<?php foreach ($result as $r) 
					{
					
  					 echo '<p class="align-left">&emsp; &emsp;'.$r[cost].'</p>';
  					 }
					?>
					<hr>
				<br/>				     					
			</div>

			<div class ="section1">
				<h3 style="background-color:#FEEA01;color:#1f95db;">Total Cost</h3>


					<?php foreach ($result as $r) {
					
  					 echo '<p class="align-left">&emsp; &emsp;'.$r[cost].'</p>';
					} ;
					echo '<hr>';
					echo '<p class="align-left">&emsp; &emsp;'.$Totalcost.'</p>';
					?>
					
					
                <br/>
            </div>
			<div class ="clearfix"></div>
			</div>
			<div class="sectionorder" >
			<h2>Shipping Address Information</h2>
				<p >Customer Name:<strong> <?php echo $result[0]['firstname'];?></strong> 
                
                </p>
                <pre> Your order will be delivered in next 2 business days.</br>
    Thanks for shopping with us 
				</pre>
			</div>
			<div class ="clearfix"></div>
            <aside class = "status">
			<h2>Current Status of Order: Payment Successful</h2>
						
			</aside>
            <footer>
                <ul>
					<li><a href = "contact.html">Contact Us</a></li>
                    <li><a href = "aboutUs.html">About Us</a></li>
                </ul>     
			</footer>
            
		</div>
		<p class = "copyright">&#169; Copyright BookCart, 2016</p>
		<hr>
</body>
</html>
