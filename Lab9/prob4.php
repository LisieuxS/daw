<?php include("header.html");?>

<?php
	$str=$_POST["num"];
	
	echo '<br><br><section> <div class="container"> <h4>Tabla</h4>';
	echo 'cuadrado y cubo de <b>n</b>: <br><br>';
	echo "<table>";
		echo "<tr>";
				echo"<th><b>i=0/i++/i-->n   (i^2)</b></th>";
				echo"<th><b>i=0/i++/i-->n   (i^3)</b></th>";
		echo "</tr>";
	for ($i=1; $i<=$str; $i++){ 
		echo "<tr>";
		for ($j=1; $j<=2; $j++){
			if ($j==1) {
				echo"<td>$i x $i=".$i*$i."</td>";
			}else if ($j==2){
				echo"<td>$i x $i x $i=".$i*$i*$i."</td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
	echo '<br><a href="index.php">Volver al index</a></div></section>';
?>

<?php include("footer.html");?>