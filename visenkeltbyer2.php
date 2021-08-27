
<!DOCTYPE html>

<?php

$cookie_name = "visbyer";
$limit = 6;
$retur = 0;
$a=array("Paris", "Oslo", "Roma", "Bergen", "Narvik", "Tulsa", "Bonn");
?>

<html>
<head>
<title> Cookie byer Eksamen 2019 </title>
</head>

<body>

<!-- Kommentar HTML -->

<?php

if(!isset($_COOKIE[$cookie_name])) {
  $cookie_value = 0;
  echo "By nummer ". ($cookie_value+1) . " er " . $a[$cookie_value] ;
  
} else {
  $cookie_value = $_COOKIE[$cookie_name];
  if ($cookie_value === $retur) {
	echo "By nummer ". ($cookie_value+1) . " er " . $a[$cookie_value] ;
	$cookie_value = $_COOKIE[$cookie_name] + 1;
} else 	{
  $cookie_value = $_COOKIE[$cookie_name] + 1; 
  echo "By nummer " . ($cookie_value+1) . " er " . $a[$cookie_value] ;
  }
  }
  
  if ($cookie_value === $limit){
	setcookie($cookie_name,"", time() - 3600);
	$cookie_value = 0; 
	}
	else {
  echo "<br>";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
  }
?>




</body>
</html>