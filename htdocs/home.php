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
    <style>
    .mySlides 
        {display:none;}
        
    .fading
        {-webkit-animation:fading 4s infinite;animation:fading 4s infinite}
        @-webkit-keyframes fading{0%{opacity:0}50%{opacity:1}100%{opacity:0}}
        @keyframes fading{0%{opacity:0}50%{opacity:1}100%{opacity:0}0}
        
    </style>
</head>
<body>
			
		<div id="fb-root"></div> 
		<script>
		(function(d, s, id) {
 			 var js, fjs = d.getElementsByTagName(s)[0];
  			if (d.getElementById(id)) return;
 			 js = d.createElement(s); js.id = id;
 			 js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
 			 fjs.parentNode.insertBefore(js, fjs);
				}
					(document, 'script', 'facebook-jssdk'));
			</script>
	
	
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
					<li class ="active"><a href="#">Home</a></li>
					<li><a href="literature.php">Literature</a></li>
					<li><a href="fiction.php">Fiction</a></li>
					<li><a href="academic.php">Academic</a></li>
					<li><a href="confirmationpage.php">Cart</a></li>
				</ul>	
				<div class ="clearfix"></div>
			</nav>
			<div class = "banner">	
				<a href="#">
                    <img class="mySlides fading" src="book1.jpg" alt="mainimage" style="width:100%">
                    <img class="mySlides fading" src="book2.jpg" alt="mainimage" style="width:100%">
                    <img class="mySlides fading" src="book3.jpg" alt="mainimage" style="width:100%"> 
                    <img class="mySlides fading" src="book4.jpg" alt="mainimage" style="width:100%">
                    <img class="mySlides fading" src="book5.jpg" alt="mainimage" style="width:100%">
                    <img class="mySlides fading" src="book6.jpg" alt="mainimage" style="width:100%"> 
                    <img class="mySlides fading" src="book7.jpg" alt="mainimage" style="width:100%">
                    <img class="mySlides fading" src="book8.jpg" alt="mainimage" style="width:100%">
                    <img class="mySlides fading" src="book9.jpg" alt="mainimage" style="width:100%"> 
                
                
                </a>
                    
       
                <!--    <img src="book1.jpg" alt="mainImage"/></a> -->
                
			</div>
			<hr>
				<br/>
				<br/>
				<div>
				<div class ="section">
				<h3><a href = "prodescript.php?id=Mocking Bird">Literature</a></h3>
				<a href = "prodescript.php?id=Mocking Bird">
				<img src="MockingBird.jpg" alt="Mocking Bird">
				</a>
				<hr>
				<div>
				<p class="align-left"> <a href = "prodesc.html"><u>Action and Adventure</u></a></p>
					<div class = "section-body">
						<a href = "prodescript.php?id=Harry Potter">
						<img src="harrypotter.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<p>&emsp; <a href = "prodescript.php?id=Harry Potter"> Harry Potter Series</a></p>
						<div class="clearfix"></div>
				    </div>	
					<div class = "section-body">
						<a href = "prodescript.php?id=Game Of Thrones">
						<img src="GameOfThrone.jpg" class = "sectionBodyImage" alt="section body">
						<br>
						<br>
						</a>
						<p>&emsp; <a href = "prodescript.php?id=Game Of Thrones"> Game of Thrones</a></p>
						<div class="clearfix"></div>
					</div>	
					<br/>
				<p class="align-left">  <u>Dramas and Plays</u></p>
					<div class = "section-body">
						<a href = "prodescript.php?id=Romeo and Juliet">
						<img src="romeo.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<p >&emsp; <a href =  "prodescript.php?id=Romeo and Juliet">Romeo and Juilet</a></p>
						<div class="clearfix"></div>
				    </div>	
				    <div class = "section-body">
				    	<a href = "prodescript.php?id=Mocking Bird">
						<img src="tokill.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<p>&emsp;<a href =  "prodescript.php?id=Mocking Bird">  To kill a Mocking Bird</a></p>
						<div class="clearfix"></div>
				    </div>
					<br/>
				<p class="align-left"><u>Literary</u></p>
					<div class = "section-body">
						<a href = "prodescript.php?id=Nightingale Woods">
						<img src="nightangile.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<br>
						<p>&emsp; <a href = "prodescript.php?id=Nightingale Woods"> Nightingale Woods</a></p>
						<div class="clearfix"></div>
				    </div>
				    <div class = "section-body">
				    	<a href = "prodescript.php?id=The Girl on the Train">
						<img src="thegirl.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<br>
						<p>&emsp; <a href = "prodescript.php?id=The Girl on the Train"> The Girl on the Train</a></p>
						<div class="clearfix"></div>
				    </div>
					<br/>
				</div>
			</div>
			<div class ="section">
				<h3>Fiction</h3>
				<a href = "prodescript.php?id=Never Let her Go"><img src="nav.jpg" alt="nav"></a>
				<hr>	
				<p class="align-left"><u>Fantasy</u></p>
					<div class = "section-body">
						<a href = "prodescript.php?id=When Dreams Travel">
						<img src="whendream.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<p >&emsp; <a href = "prodescript.php?id=When Dreams Travel"> When Dreams travel</a></p>
						<div class="clearfix"></div>
					</div>
					<div class = "section-body">
						<a href = "prodescript.php?id=The Once and Future King">
						<img src="theonce.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<p >&emsp; <a href = "prodescript.php?id=The Once and Future King"> The once and future king</a></p>
						<div class="clearfix"></div>
					</div>
					<br/>
				<p class="align-left" ><u>Sci-fi</u></p>
					<div class = "section-body">
						<a href = "prodescript.php?id=1984">
						<img src="a1984.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<p>&emsp;  <a href = "prodescript.php?id=1984">1984</a></p>
						<div class="clearfix"></div>
					</div>
					<div class = "section-body">
						<a href = "prodescript.php?id=The Martian">
						<img src="themartian1.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<p>&emsp; <a href = "prodescript.php?id=The Martian">The Martian</a></p>
						<div class="clearfix"></div>
					</div>
					<br/>
				<p class="align-left"><u>Thriller</u></p>
					<div class = "section-body">
						<a href = "prodescript.php?id=After the Crash">
						<img src="thecrash.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<p>&emsp; <a href = "prodescript.php?id=After the Crash">After the crash</a></p>
						<div class="clearfix"></div>
					</div>
					<div class = "section-body">
						<a href = "prodescript.php?id=The Girl in the Red Coat">
						<img src="thegirlinthered.jpg" class = "sectionBodyImage" alt="section body">
						</a>
						<p>&emsp; <a href = "prodescript.php?id=The Girl in the Red Coat">The girl in the red coat</a></p>
						<div class="clearfix"></div>
					</div>	
					<br/>
				</div>
			<div class ="section">
				<h3 ><a href = "prodescript.php?id=Java">Acedemic</a></h3>
				<a href = "prodescript.php?id=Java">
				<img src="java.jpg" alt="java">
				</a>
				<hr>
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
						<p>&emsp;<a href = "prodescript.php?id=Power Systems"> Power System</a></p>
						<div class="clearfix"></div>
					</div>
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
						<p>&emsp;<a href = "prodescript.php?id=GeoTechnical Engineering"> GeoTechnical Engineering</a></p>
						<div class="clearfix"></div>
					</div>
					<br/>
				</div>
			<div class ="clearfix"></div>
			</div>
			<hr>
			<br>
			<br>
			<section class = "left-col">
			<h2>Summary</h2>
				<p class = "psummary">Programming the World Wide Web is intended for undergraduate students who have completed a course in object-oriented programming. It also serves as an up-to-date reference for Web programming professionals.</p>
				<p class = "psummary" >Programming the World Wide Web provides a comprehensive introduction to the tools and skills required for both client- and server-side programming, teaching students how to develop platform-independent sites using the most current Web development technology. Essential programming exercises are presented using a manageable progression: students begin with a foundational Web site and employ new languages and technologies to add features as they are discussed in the course. Readers with previous experience programming with an object-oriented language are guided through concepts relating to client-side and server-side programming. All of the markup documents in the book are validated using the W3C validation program.</p>
				
			</section>
			<aside class = "sidebar">
				<div class = "smartimage">
				<a href = "prodescript.php?id=Java">
					<img src="c.jpg" alt="SmartImage" />
				</a>
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
		<hr>
    
    
    <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000);    
}
</script>
 

<!-- place it where you want it to appear -->
<!-- fb like button -->
<div class="fb-like" data-href="https://www.facebook.com/BookCartproject/?skip_nax_wizard=true" data-width="6" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>

<!-- google + button -->

<div class="g-plusone"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<!-- Twitter icon -->
<a href="https://twitter.com/share" class="twitter-share-button" data-text="BookCart" data-via="chandrikavasud1" data-size="large" data-hashtags="bookcart">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
 
    
    
</body>
</html>
