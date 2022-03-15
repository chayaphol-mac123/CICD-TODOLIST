<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["favcolor"] = "lightblue";
$_SESSION["favanimal"] = "dog";
echo "Session variables are set.";
?>

</body>
</html>