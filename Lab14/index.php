<?php

    require_once "util.php";
    function imprimiralumnos(){
        $bd=conectDb2();
        $query='SELECT* from alumno';
    

    $results=$bd->query($query);
    echo '<div class="row"><div class="col m12 medium-table"><table class="centered"><thead>';
    echo '<tr><th>ID</th><th>Nombre(s)</th><th>Apellido Paterno(s)</th><th>Apellido Materno(s)</th><th>Sexo</th></tr></thead><tbody>';
    while($row=mysqli_fetch_array($results,MYSQLI_BOTH)){
        echo '<tr>';
            // use of numeric index
            echo '<td>'.$row['id_alumno'].'</td>';
            echo '<td>'.$row['nombre'].'</td>';
            echo '<td>'.$row['apellido_paterno'].'</td>';
            echo '<td>'.$row['apellido_materno'].'</td>';
            echo '<td>'.$row['sexo'].'</td>';
        	echo '</tr>';
    }
    echo '</tbody></table></div></div>';
    mysqli_free_result($results);
closeDb($bd);
    }

?>