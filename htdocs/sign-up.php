<?php
// Turn off all error reporting
error_reporting(0);
?>
<html>
<head>
  <title>SignUp Page</title>
        <meta charset="UTF-8">
        <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>

<?php

$db = new PDO('mysql:host=localhost;port=8889;dbname=bookcart;charset=utf8mb4','sudheer','sudheer');
$password = $_POST[Password];

$options = ['cost' => 11];

$hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);
$stmt = $db->query("INSERT INTO login (firstname,lastname,Email,Password) VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["Email"]."','$hashed_password')");

?>
<script>
     window.location.href = 'Login.html';
    </script>
</body>
</html>


 