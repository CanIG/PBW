<html>
    <body>
<?php
//create cookie
 $cookie_name = "Teacher";
 $cookie_value = "Kimaya";
 setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<?php
// Start the session
session_start();
?>
<html>
<body>
<?php
 if (!isset($_COOKIE[$cookie_name]))
 {
 echo "Cookie named '" . $cookie_name . "' is not set!";
 }
 Else
 {
 echo "Cookie '" . $cookie_name . "' is set! <br>";
 echo "Value is: " . $_COOKIE[$cookie_name];
 }
?>
<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "<br>Session variables are set.";
?>
</body>
</html>
