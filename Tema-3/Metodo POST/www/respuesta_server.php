
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Entered</title>
</head>
<body>


<?php
	echo "Gracias por ingesar, sus datos son:","<br>";
		while (list($name,$value) = each($_POST)) {
	echo $name." = ".$value."<br/>";
		}

	 # echo <img src="$avatar";>  //No puedo lograr mostrar la imagen me sale error 500 del lado del sv cuando ejecuta el submit
	
?>
</body>
</html>