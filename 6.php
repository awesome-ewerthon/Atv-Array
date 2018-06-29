<!DOCTYPE html>
<html>
<head>
	<title>exercicio 6</title>
	<meta charset="utf-8">
</head>
<body>
<form method="post" action="#">
	<label for="n1">Digita:</label>
	<input type="numb" id="n1" name="n1" /><br />
	<label for="n1">Digita:</label>
	<input type="numb" id="n2" name="n2" /><br />
	<label for="n1">Digita:</label>
	<input type="numb" id="n3" name="n3" /><br />
	<label for="n1">Digita:</label>
	<input type="numb" id="n4" name="n4" /><br />
	<label for="n1">Digita:</label>
	<input type="numb" id="n5" name="n5" /><br />
	<label for="n1">Digita:</label>
	<input type="numb" id="n6" name="n6" /><br />
	<label for="n1">Digita:</label>
	<input type="numb" id="n7" name="n7" /><br />
	<label for="n1">Digita:</label>
	<input type="numb" id="n8" name="n8" /><br />
	<label for="n1">Digita:</label>
	<input type="numb" id="n9" name="n9" /><br />
	<label for="n1">Digita:</label>
	<input type="numb" id="n10" name="n10" /><br />
<input type="submit" value="Enviar" name="submit" />
</form>
<?php
//$a =  $_POST["n1"];
$a=array($_POST["n1"],$_POST["n2"],$_POST["n3"],$_POST["n4"],$_POST["n5"],$_POST["n6"],$_POST["n7"],$_POST["n8"],$_POST["n9"],$_POST["n10"],);
$b=array_reverse($a);

echo "</br>";
echo "</br>";
foreach ($b as $value) {
 	echo "$value <br>";
}
?>
</body>
</html>