<?php
$cookie_name = "user"; //Key
$cookie_value = "Songkeit Klinnimnaul"; //Value
setcookie($cookie_name, $cookie_value, time() + (3), "/"); //defind 3 second 
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>