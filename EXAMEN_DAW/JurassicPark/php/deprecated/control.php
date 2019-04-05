<?php
 require_once("util.php");
 $conexion= conectar();
$output="";
 $query="SELECT * FROM lugar ORDER BY id_lugar";
    if(isset($_POST['consulta'])){
        $q=$conexion->real_escape_string($_POST['consulta']);
        $query="SELECT nombre FROM lugar
        Where nombre LIKE  '%" .$q. "%'  ";
    }
    $resultado=$conexion->query($query);
    if($resultado->num_rows>0){
        $output.= "<table>
        <thead>
        <tr>
        <td>Nombre Lugar</td>
        </tr>
        </thead>
        <tbody>";
        while($tupla= $resultado->fetch_assoc()){
            $output.="<tr>
                         <td>".$tupla['nombre']."</td>
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