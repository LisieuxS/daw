<?php include("header.html");?>

<?php
	function imc($peso,$altura){
		$altura=$altura/100;
		$imc= $altura*$altura;
		$imc= $peso/$imc;

		return $imc;
	}

	function estado($peso,$altura){
		$imc=imc($peso,$altura);
		if ($imc<18.4){
			echo"<b>Insuficiencia Ponderal</b>";
		}else if ($imc<24.9){
			echo"<b>Normal</b>";
		}else if($imc<29.9){
			echo"<b>Sobrepeso</b>";
		}else{
			echo"<b>Obesidad</b>";
		}
	}

	$str=$_POST["peso"];
	$str1=$_POST["altura"];

	echo '<br><br><section> <div class="container"> <h4>Cálculo del Índice de Masa Muscular</h4>';
	echo 'El índice de masa corporal dado el peso de '. $str.' kg y la altura de '. $str1.' centímetros es: ';
	echo round(imc($str, $str1), 2);
	echo '<br><h5>Clasificación<br></h5>';
	echo '<b>Condición</b> ';
	echo estado ($str,$str1);
	echo '<br><a href="index.php">Volver al index</a></div></section>';
?>

<?php include("footer.html");?>