<?php
function conectDb2(){
    $conexion = mysqli_connect("localhost","root","","lab14");
      if ($conexion == NULL) {
          die("500: Internal Server Error");
      }
      $conexion->set_charset(" ");
      return $conexion; 
    }
   


function closeDb($mysql){
    mysqli_close($mysql);
} 




?>