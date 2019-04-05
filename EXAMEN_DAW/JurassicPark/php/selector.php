<?php

    require_once("util.php");
    $pattern=strtolower($_GET['pattern']);
    
    $lugares=array();
    $result=obtenerLugares();
    
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
          array_push($lugares,$row["descripcion_lugar"]);
        }
    }
    
    $size=0;

    $response='<option value="" disabled selected>Selecciona una opción</option>';
    $size=0;
    for($i=0; $i<count($lugares); $i++)
    {
       $pos=stripos(strtolower($lugares[$i]),$pattern);
       if(!($pos===false))
       {
         $size++;
         $lugar=$lugares[$i];
         $response.='<option value="'.$lugar.'">'.$lugar.'</option>';
       }
    }
    if($size>0)
      echo '<select name="lugar" id="lugar" size=$size>'.$response.'</select>';
?>