<?php 
session_start();
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<?php
session_destroy();
$_SESSION = array();
?>
<html>
<head>
  <title>SignUp Page</title>
        <meta charset="UTF-8">
        <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
<script> 
window.location.href = 'home.html'; 
</script>

</body>
</html>


