<?php
$cookie_name = "FLAG";
$cookie_value = "xss_is_W0oW";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>


<html>

<body>
Hello,

<?php
echo $_GET["name"];


?>
</body>
</html>
