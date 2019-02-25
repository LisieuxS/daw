<?php include("header.html");?>
<?php

	function mediana($arg){
		$size=count($arg);
		sort($arg);
		if ($size%2==0){
			return ($arg[$size/2]+$arg[($size/2)-1])/2;
		}else{
			return $arg[floor($size/2)];
		}
	}

	$str=$_POST["arg"];
	$argfix=explode(" ", $str);

	echo '<br><br><section> <div class="container"> <h4>Calcular Media</h4>';
	echo 'La mediana del arreglo ingresado da: ' . mediana($argfix).'<br><a href="index.php">Volver al index</a></div></section><br>';
?>
<?php include("footer.html");?>