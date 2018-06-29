<!DOCTYPE html>
<html>
<head>
	<title>exercicio1</title>
	<meta charset="utf-8">
</head>
<body>



<?php



$aluno = array("Guilherme", "Tony", "Steve","Clint", "Scott");

$nota = array(7,10,9,6,7,5);

$media=($nota[0]+$nota[1]+$nota[2]+$nota[3]+$nota[4])/5; 



foreach ($aluno as $value) {
    echo "$value <br>";
}

echo 'Notas:';
echo '</br>';

foreach ($nota as $value) {
 	echo "$value <br>";
}

echo 'a média é  '."$media";
echo "</br>";
echo 'maior nota é   ';
echo max($nota);




?>
</body>
</html>