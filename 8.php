<html>
    <head>
      <meta charset = "utf-8">
      <title>Exercício 8</title>
      <h1 align="center"> Exercício 8</h1>
     </head>

	</br>

    <?php
        $carro= array("City","Hb20","Doblo","Celta","March","Corsa","Ranger","Toro","Ecosport","Tucson");
        $marca =array("Honda","Hyundai","Fiat","GM","Nissan","GM","Ford","Fiat","Ford","Hyundai");
		$cor = array("prata", "preto", "verde", "preto", "prata", "branco", "prata", "branco", "preto", "vinho");
		$portas = array("4", "4", "4", "2", "2", "2", "4", "4", "4", "4");
        $ano = array("2016", "2015", "2013", "2012", "2015", "2010", "2012", "2014", "2013", "2012");

		echo("Os modelos dos carros e os seus respectivos anos são:  <br><br>");

		for ($y=0;$y<10;$y++)
		{
            echo($carro[$y]." - ".$ano[$y]."<br>");
		}

		    echo("<br><br>Os veículos da cor prata são:  <br><br>");

		for ($y=0;$y<1;$y++)
		{
            echo($carro[0]."<br>" . $carro[4]."<br>".$carro[6]."<br>");
		}

		echo("<br><br>Todos os veículos, cor e quantidade de portas:  <br><br>");

		for ($y=0;$y<1;$y++)
		{
            echo($carro[0].", ".$cor[0] . ", ".$portas[0]."<br>");
			echo($carro[1] . ", ".$cor[1] . ", ".$portas[1] . "<br>");
			echo($carro[2].", ".$cor[2] . ", ".$portas[2]."<br>");
			echo($carro[3].", ".$cor[3].", ".$portas[3]."<br>");
			echo($carro[4].", ".$cor[4].", ". $portas[4]."<br>");
			echo($carro[5] .", " . $cor[5] .", " .$portas[5] ."<br>");
			echo($carro[6] .", " . $cor[6] . ", " . $portas[6] . "<br>");
			echo($carro[7] . ", " . $cor[7] . ", " . $portas[7] . "<br>");
			echo($carro[8] .", " . $cor[8] . ", " . $portas[8] . "<br>");
			echo($carro[9] . ", " . $cor[9] . ", " . $portas[9] . "<br>");
		}

		echo("<br><br>Todos os veículos da Ford são:  <br><br>");

			for ($y=0;$y<1;$y++)
		{
            echo($carro[6] . "<br>" . $carro[8] . "<br>");
		}

		echo("<br><br>Os veículos com ano de fabricação igual ou maior a 2013 são:  <br><br>");

		for ($y=0;$y<1;$y++)
		{
          echo($carro[0] ."<br>" . $carro[1] ."<br>" . $carro[2] . "<br>" . $carro[4] . "<br>" . $carro[7] . "<br>" . $carro[8] .  "<br>");
		}
    ?>

</body>

</html>
