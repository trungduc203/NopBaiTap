<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$n = rand(1,100);
for ($i=1; $i <= $n ; $i++) { 
	for ($j=0; $j < $i; $j++) { 
		echo " * ";
	}
 		echo "</br>";		
}
 ?>
</body>
</html>