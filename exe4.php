<!DOCTYPE html>
<html>
<head>
	<title>exercicio 4</title>
	<meta charset="utf-8">
</head>
<body>


<form method="post" action="#">

<label for="a">Digite um numero:</label>
<input type="text" id="a" name="a" /><br />

<label for="b">Digite um numero:</label>
<input type="text" id="b" name="b" /><br />

<label for="c">Digite um numero:</label>
<input type="text" id="c" name="c" /><br />

<label for="d">Digite um numero:</label>
<input type="text" id="d" name="d" /><br />

<label for="e">Digite um numero:</label>
<input type="text" id="e" name="e" /><br />

<label for="f">Digite um numero:</label>
<input type="text" id="f" name="f" /><br />

<label for="g">Digite um numero:</label>
<input type="text" id="g" name="g" /><br />

<label for="h">Digite um numero:</label>
<input type="text" id="h" name="h" /><br />

<label for="i">Digite um numero:</label>
<input type="text" id="i" name="i" /><br />

<label for="j">Digite um numero:</label>
<input type="text" id="j" name="j" /><br />

<label for="aa">Digite um numero </label>
<input type="text" id="aa" name="aa" /><br />

<label for="bb">Digite um numero </label>
<input type="text" id="bb" name="bb" /><br />

<label for="cc">Digite um numero </label>
<input type="text" id="cc" name="cc" /><br />

<label for="dd">Digite um numero </label>
<input type="text" id="dd" name="dd" /><br />

<label for="ee">Digite um numero  </label>
<input type="text" id="ee" name="ee" /><br />

<label for="ff">Digite um numero </label>
<input type="text" id="ff" name="ff" /><br />

<label for="gg">Digite um numero </label>
<input type="text" id="gg" name="gg" /><br />

<label for="hh">Digite um numero </label>
<input type="text" id="hh" name="hh" /><br />

<label for="ii">Digite um numero </label>
<input type="text" id="ii" name="ii" /><br />

<label for="jj">Digite um numero </label>
<input type="text" id="jj" name="jj" /><br />


<input type="submit" value="Enviar" name="submit" />
</form>














<?php
$nota = array();

$nota[] = $_POST['a'];
$nota[] = $_POST['b'];
$nota[] = $_POST['c'];
$nota[] = $_POST['d'];
$nota[] = $_POST['e'];
$nota[] = $_POST['f'];
$nota[] = $_POST['g'];
$nota[] = $_POST['h'];
$nota[] = $_POST['i'];
$nota[] = $_POST['j'];

$nota2 = array();
$nota2[] =$_POST['aa'];
$nota2[] =$_POST['bb'];
$nota2[] =$_POST['cc'];
$nota2[] =$_POST['dd'];
$nota2[] =$_POST['ee'];
$nota2[] =$_POST['ff'];
$nota2[] =$_POST['gg'];
$nota2[] =$_POST['hh'];
$nota2[] =$_POST['ii'];
$nota2[] =$_POST['jj'];
for($x = 0; $x < count($nota)-1; $x++){
    echo $nota[$x]." x ".$nota2[$x]." = ".$nota[$x]*$nota2[$x]."<br>";
}
/*=
//varrendo com sizeof
for($x = 0; $x < sizeof($nome); $x++){
    echo "$nome[$x] <br>";
}

varrendo usando count
for($x = 0; $x < count($nome); $x++){
    echo "$nome[$x] <br>";
}


//varrendo com while
$x = 0;
while($x < sizeof($nome)){
    echo "$nome[$x] <br>";
    $x++;
}


// foreach simples
foreach($nome as $value){
    echo "$value <br>";
}

// foreach com indice
foreach($nome as $value => $conteudo){
    echo "$value - $conteudo <br>";
}



*/
?>
</body>
</html>