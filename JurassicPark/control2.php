<?php
 require_once("util.php");
 $conexion= conectar();
$output="";
 $query="SELECT * FROM incidente ORDER BY id_incidente";
    if(isset($_POST['consulta'])){
        $q=$conexion->real_escape_string($_POST['consulta']);
        $query="SELECT nombre FROM  incidente
        Where nombre LIKE  '%" .$q. "%'  ";
    }
    $result=$conexion->query($query);
    if($resultado->num_rows>0){
        $output.= "<table>
        <thead>
        <tr>
        <td>Nombre incidente</td>
        </tr>
        </thead>
        <tbody>";
        while($tuplas= $resultado->fetch_assoc()){
            $output.="<tr>
                         <td>".$tuplas['nombre']."</td>
                         </tr>";
                    
        }
        $output.="<\tbody></table>";
    }
    else{
        $output.="No existen datos para coincidir con lo solicitado";
    }
    echo $output;
    desconectar($conexion);
?>