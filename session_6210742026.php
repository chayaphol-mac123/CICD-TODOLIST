<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["favcolor"] = "yellow";
$_SESSION["favanimal"] = "doggy";
echo "Session variables are set by Chayaphol EIEI" . ".<br>" ;

echo "Favorite color is" . $_SESSION["favcolor"] . ".<br>";
print_r($_SESSION)

?>

    
</body>
</html>