<?php include("header.html");?>
<?php

	function promedio($arg){
		$total=0;
		$size=count($arg);
		for ($i=0; $i<$size; $i++){ 
			$total+=$arg[$i];
		}
		return $total/$size;
	}

	$str=$_POST["arg"];
	$argfix=explode(" ", $str);

	echo '<br><br><section> <div class="container"> <h4>Calcular Promedio</h4>';
	echo 'El promedio del arreglo ingresado da: ' . promedio($argfix).'<br><a href="index.php">Volver al index</a></div></section><br>';
?>
<?php include("footer.html");?>