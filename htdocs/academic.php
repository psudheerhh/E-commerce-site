<?php 
session_start();
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>BookCart</title>
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
			echo '<p> <b> <a href = "home.php">'.$result[0]['firstname'].'</a> </b>|<b> <a href = "sign-out.php">Sign-Out</a> </b> | <b><a href= "confirmationpage.php">   Cart  <img src="cart.png" alt="cart"></a> </b></p>';
			} else{
			echo '<p> <b> <a href = "login.html">login</a> </b> | <b> <a href = "sign-up.html">Sign-Up</a> </b>|<b><a href= "login.html">   Cart  <img src="cart.png" alt="cart"></a> </b></p>';
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
					<li class = "active"><a href="#">Academic</a></li>
					<li><a href="confirmationpage.php">Cart</a></li>
				</ul>	
				<div class ="clearfix"></div>
			</nav>
			<div class = "banner">	
				<a href="#"><img src="book1.jpg" alt="mainImage"/></a>
			</div>
			<hr>
				<br/>
				<br/>
				<div>
				<div class ="section">
				<div>
				<br/>
				<br/>
				<br/>
					<p class="align-left"><u>Science</u></p>
					<div class = "section-body">
						<a href = "prodescript.php?id=Analysis of Algorithms">
						<img src="algorithm.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<br>
						<br>
						
						<p>&emsp;<a href = "prodescript.php?id=Analysis of Algorithms">Analysis of Algorithms</a></p>
						<div class="clearfix"></div>
					</div>
					<div class = "section-body">
						<a href = "prodescript.php?id=Operating Systems">
						<img src="operating.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<br>
						<br>
						<p>&emsp; <a href = "prodescript.php?id=Operating Systems"> Operating System</a></p>
						<div class="clearfix"></div>
					</div>
					<br/>
				</div>
			</div>
			<div class ="section">
				<h3>Science</h3>
				<hr>	
				<p class="align-left"><u>Electrical</u></p>
					<div class = "section-body">
					<a href = "prodescript.php?id=VLSI Design">
						<img src="vlsi.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<p style="position: bottom left;">&emsp; <a href = "prodescript.php?id=VLSI Design">VLSI Design</a></p>
						<div class="clearfix"></div>
					</div>
					<div class = "section-body">
					<a href = "prodescript.php?id=Power Systems">
						<img src="power.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<br>
						<p>&emsp;<a href = "prodescript.php?id=Power Systems">Power System</a></p>
						<div class="clearfix"></div>
					</div>
					<br/>
				</div>
			<div class ="section">
				<br/>
				<br/>
				<br/>
				<p class="align-left" ><u>Civil Engineering</u></p>
					<div class = "section-body">
						<a href = "prodescript.php?id=Design of Steel Structure">
						<img src="thesteel.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<br>
						<p>&emsp; <a href = "prodescript.php?id=Design of Steel Structure">Design of Steel Structure</a></p>
						<div class="clearfix"></div>
					</div>
					<div class = "section-body">
						<a href = "prodescript.php?id=GeoTechnical Engineering">
						<img src="geotech.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<br>
						<br>
						<p>&emsp;<a href = "prodescript.php?id=GeoTechnical Engineering">  GeoTechnical Engineering</a></p>
						<div class="clearfix"></div>
					</div>
					<br/>
				
			<div class ="clearfix"></div>
			</div>
			<hr>
			<br>
			<br>
			
			<div class ="clearfix"></div>
			
			<footer>
                <ul>
					<li><a href = "contact.html">Contact Us</a></li>
                    <li><a href = "aboutUs.html">About Us</a></li>
                </ul>     
			</footer>
		</div>
		<p class = "copyright">&#169; Copyright BookCart, 2016</p>
		<hr>
		</div>	
	</body>
</html>