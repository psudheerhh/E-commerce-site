<?php 
session_start();
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<!doctype html>
<html>
    <head>
        <title>Address and payment Confirmation</title>
        <meta charset="UTF-8">
        <link href="style.css" type="text/css" rel="stylesheet">
        
    </head>
    
    <body >
       <div id = "wrapper">
            <div class = "callout">
               				<p><b><a href = "home.html"> <img src="logo1.png" alt="logo"></a></b></p>
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
                    <form id="f">
                    <h1>Address </h1>
                    
                    <label>First Name</label>
                    <input type="text" name="Email" >
                    
                    <label>Last Name</label>
                    <input type="text" name="Password" >
                    
                    <label>Street Address</label>
                    <input type="text" name="Street Address" >
                    
                    <label>Apt/Suite</label>
                    <input type="text" name="Apt/Suite" >
                        
                    <label>City</label>
                    <input type="text" name="City" >
                       
                    <label>Zip Code</label>
                    <input type="text" name="Zip Code" >
                         
                    <label>Cell Number</label>
                    <input type="text" name="Email" >
                        
                    <label>Country</label>
                    <select id="country" name="country">
                        <option value="australia">India</option>
                        <option value="usa">USA</option>
                        <option value="canada">Canada</option>
                    </select> 
                 </form>   
            
            <form id = "s">
                 <h1>Billing Information </h1>
                 
                 <label class="b">*Card Number</label>
                 <input  class="ib" type="text" name="Card Number"  id = "cardnum">
                 </br>
                 <img class="ib" src="cards.png" alt="cards" width=20 height =2>
                 
                 <label class="b">*CVV</label>
                 <input  type="text" name="CVV" >   
                 
                 <label class="b">Expiration date</label>
                 <input  type="text" name="Expiry" >
                 
                 <label class="b">First Name</label>
                 <input  type="text" name="First Name" >
                
                 <label class="b">Last Name</label>
                 <input  type="text" name="Last Name" >
                 
                 <label class="b">Billing Zip</label>
                 <input  type="text" name="Billing Zip" >
                  
                 </br>
                 <button type= "button" onClick="location.href='orderconfirmation.php'">Submit&nbsp;&nbsp;&nbsp;</button>  
                 
           </form>
           <div class ="clearfix"></div>
                    
            <footer>
                <ul>
                    <li><a href = "contact.html">Contact Us</a></li>
                    <li><a href = "aboutUs.html">About Us</a></li>
                </ul>     
            </footer>
        
        <p class = "copyright">&#169; Copyright BookCart, 2016</p>
        <hr>
       </div>
    </body>
</html>

<script type="text/javascript">
    function checkCard(){
        var cardn = document.getElementById("cardnum").value;
        var arr = ['1234567812345678','8765432187654321', '9876543212345678', '1234567898765432'];
        var i = 0;
        var flag = 'true';
        for(i = 0; i < 4; i++){
            if(arr[i] == cardn){
                flag = 'false';
            }
        }
        if(flag == 'true'){
            window.alert("wrong input");
        }
    }
</script>