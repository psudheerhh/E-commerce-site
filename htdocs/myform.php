<?php 
session_start();
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<html>
<head>
  <title>SignUp Page</title>
        <meta charset="UTF-8">
        <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>

<?php
include_once("dbconfig.php");
$Email = $_POST['Email'];
$user_input = $_POST['Password'];
$sql= "SELECT * FROM login WHERE Email='$Email'";
$stmt = $db->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $r) 
{
if (password_verify($user_input, $r[Password])) {
    $_SESSION['Email']=$Email;
 echo "<script> window.location.href = 'home.php'; </script>";
} else {
    echo 'Invalid password.';
}
}
?>

</body>
</html>


