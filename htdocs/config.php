<?php
error_reporting(0);
$db = new PDO('mysql:host=localhost;port=8889;dbname=bookcart;charset=utf8mb4','sudheer','sudheer');
$Email = $_POST['Email'];
$user_input = $_POST['Password'];
$sql= "SELECT * FROM login WHERE Email='$Email'";
$stmt = $db->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $r) 
{
if (password_verify($user_input, $r[Password])) {
   session_start();
   $_SESSION['username']=$Email;
 echo "
	<script> window.location.href = 'home.php'; </script>  ";
	exit();
} else {
    echo 'Invalid password.';
}
}
?>