<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title>exercicio 7</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
	$pessoas=array(
		array("Paula","Sao Vicente","40","feminino"),
		array("Caio","Sao paulo","15","maculino"),
		array("Caique","Santos","10","maculino"),
		array("Maria","PG","24","feminino"),
		array("Carlos","PG","12","maculino"),
		array("Maria","Santos","90","feminino"),
		array("Fernando","Pg","25","maculino"),
		array("Kin","Canada","10","maculino"),
		array("Paula","Sao Vicente","40","feminino"),
		array("Carla","Sao Vicente","40","feminino"),
	);

	for($i=0;$i<sizeof($pessoas);$i++){
		echo "<br>";
		echo "Nome: ".$pessoas[$i][0] ." , Idade: ".$pessoas[$i][2];
	}
		echo "<br> <br> <b> Moradores de santos:</b>";	
 		for($i=0;$i<sizeof($pessoas);$i++) {

			if ($pessoas[$i][1]=="Santos") {
		
			echo "<br>Nome: ".$pessoas[$i][0];
	 	}
}
		echo "<br> <br> <b> Maiores de 18:</b>";	
 		for($i=0;$i<sizeof($pessoas);$i++) {
			if ($pessoas[$i][2]>=18) {
			echo "<br>Nome: ".$pessoas[$i][0];
	 	}
}
		echo "<br> <br> <b> Quantidade de homens:</b>";	
		$m=0;
 		for($i=0;$i<sizeof($pessoas);$i++) {

			if ($pessoas[$i][3]=="maculino") {
		 $m++ ;
		}
}
		echo "Quant. total: ".$m;



//for($i=0;$i<sizeof($pessoas);$i++) {
//echo "<br>";