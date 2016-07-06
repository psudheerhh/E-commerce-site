<?php 
session_start();
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<html>
<head>
  <title>addcart</title>
        <meta charset="UTF-8">
        <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>

<?php

$db = new PDO('mysql:host=localhost;port=8889;dbname=bookcart;charset=utf8mb4','sudheer','sudheer');
$product = $_GET['product'];
//echo "$product";
$Email = $_SESSION[Email];
$q = $db->query("SELECT * FROM bookdetails WHERE bookname = '$product'");
$q->setFetchMode(PDO::FETCH_ASSOC);
$r = $q->fetch();
$bookname = $r["bookname"];
$cost = $r["cost"];
$stmt = $db->query("INSERT INTO cart (bookname,cost,Email) VALUES ('$bookname','$cost','$Email')");
?>
<script>
    setTimeout( function(){window.location.href = 'home.php';},1000);
    </script>
</body>
</html>

