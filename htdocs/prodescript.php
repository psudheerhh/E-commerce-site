<?php 
session_start();
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<?php
$db = new PDO('mysql:host=localhost;port=8889;dbname=bookcart;charset=utf8mb4','sudheer','sudheer');
$product = $_GET['id'];
$q = $db->query("SELECT * FROM bookdetails WHERE bookname = '$product'");
$q->setFetchMode(PDO::FETCH_ASSOC);
$r= $q->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Product Description</title>
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
				<div class ="section">
				
				
				
				<h3 ><?php echo htmlspecialchars($r['bookname']); ?></h3>
				
				<img src = '<?php echo htmlspecialchars($r['img']); ?>'>
			 
			    </div>
                
                <div class="section">
				<h3>Short peek</h3>
				<p><b>Author Name</b>  <?php echo htmlspecialchars($r['author']); ?></p>
                <p id = "prodesc"><?php echo htmlspecialchars($r['description']); ?></p>    
                </div>
		        <div class="section">
                <h3><b>Cost</b> $<?php echo htmlspecialchars($r['cost']); ?></h3>
                <p><b>Books in Stock</b> <?php echo htmlspecialchars($r['stock']); ?></p> 
                
               
                <p class = "addtocartbutton"><a href="s.php?product=<?php echo $product;?>" style="text-decoration:none; color:black;">Add to cart &emsp;</a><img src="cart.png" alt="cart"></p> 
                <p class = "addtocartbutton"><a href = "confirmationpage.php" style="text-decoration:none; color:black;">Proceed to Cart</a> &emsp;<img src="cart.png" alt="cart"></p> 
                <p>Free shipping on orders with at least $27 of books</p>    
                    
                </div>
			
			
			<div class ="clearfix"></div>
			<br>
			<br>
			<section class = "left-col">
			<h2>Reviews</h2>
				<p class = "psummary"><?php echo htmlspecialchars($r['review']); ?></p>
			</section>
			<aside class = "sidebar">
				<div class = "smartimage">
					<img src = '<?php echo htmlspecialchars($r['img']); ?>'>
				</div>	
			</aside>
			<div class ="clearfix"></div>
			
            <footer>
                <ul>
					<li><a href = "contact.html">Contact Us</a></li>
                    <li><a href = "aboutUs.html">About Us</a></li>
                </ul>     
			</footer>
            
		</div>
		<p class = "copyright">&#169; Copyright BookCart, 2016</p>

</body>
</html>