<?php include("header.html");?>
<?php
	function mediana($arg){
		$size=count($arg);
		sort($arg);
		if ($size%2==0) {
			return ($arg[$size/2]+$arg[($size/2)-1])/2;
		}else{
			return $arg[floor($size/2)];
		}
		
	}

	function arreglolista($arg){
		echo"<ol>";
		$size=count($arg);
		for ($i=0; $i <$size ; $i++){ 
			echo"<li>".$arg[$i]."</li>";
		}
		echo"</ol>";
	}

	function promedio($arg){
		$total=0;
		$size=count($arg);
		for ($i=0; $i <$size; $i++){ 
			$total+=$arg[$i];
		}
		return $total/$size;
	}

	function baja($arg){
		sort($arg);
		$size=count($arg);
		echo $arg[$size-1].' ';
		for ($i=$size-2; $i>=0; $i--){ 
			echo ' '.$arg[$i];
		}
	}

	function sube($arg){
		sort($arg);
		$size=count($arg);
		echo $arg[0].' ';
		for ($i=1; $i <$size; $i++){ 
			echo ' '.$arg[$i];
		}
	}

	$str=$_POST["arg"];
	$argfix=explode(" ", $str);

	echo '<br><br><section> <div class="container"> <h4>Calcular Media</h4>';
	echo "<b>Información del arreglo ingresado </b> <br>";
	echo "valores enlistados: <br>";
	echo arreglolista($argfix).'<br>';
	echo 'Promedio: ';
	echo promedio($argfix).'<br>';
	echo 'Mediana: ';
	echo mediana($argfix).'<br>';
	echo 'Orden ascendente: ';
	echo sube($argfix).'<br>';
	echo 'Orden descendente: ';
	echo baja($argfix);
	echo '<br><a href="index.php">Volver al index</a></div></section><br>';
?>
<?php include("footer.html");?>