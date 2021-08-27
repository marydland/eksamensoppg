<?php 
$a=array("Paris", "Oslo", "Roma", "Bergen", "Narvik", "Tulsa", "Bonn");
setcookie('VisByer', serialize($a), strtotime( '+30 days' ) ); 
?>

<!DOCTYPE html>


<html>
<head>
<title> Cookie byer Eksamen 2019 </title>
</head>

<body>

<!-- Kommentar HTML -->

<?php

$cookie = 0;
$nummer = 0;

if (!isset($_COOKIE['VisByer'])) {  
  setcookie("count", $cookie);
  echo "By nummer 1 er Paris"; 
}else{
  $cookie = ++$_COOKIE['count'];
  $nummer = $cookie + 1;
  setcookie("count", $cookie);
	if ($nummer===8){
		unset($_COOKIE['VisByer']);
		setcookie('VisByer', null, time()-3600); 
		exit ("Ingen flere byer"); }
	echo "By nummer ".$nummer." er " . $a[$_COOKIE['count']] ;
  }
echo "<br>";

?>

</body>
</html>