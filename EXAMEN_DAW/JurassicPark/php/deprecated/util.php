<?php 
    

    function conectar() {
        $mysql = mysqli_connect("localhost","a01207648","","jurassicpark");
        $mysql->set_charset("utf8");
        return $mysql;
        
    }

    function desconectar($bd) {
        mysqli_close($bd);
        
        
    }
    
    
   
   function recuperar_Lugar(){
       $vista=conectar();
       $query='Select * from lugar';
       
       $despliegue=$vista->query($query);
       $output='<option value="0">Lugar del incidente</option>';
       
       while($tupla= mysqli_fetch_array($despliegue, MYSQLI_BOTH)){
           $output.= "<option value='$tupla[1]'>$tupla[id_lugar]</option>";
           
       }
       return $output;
       
   }
   
   function recuperar_Incidente(){
       $vista=conectar();
       $query='Select * from incidente';
       
        $despliegue=$vista->query($query);
       $output='<option value="0">Incidente ocurrido</option>';
       
       while($tupla= mysqli_fetch_array($despliegue, MYSQLI_BOTH)){
           $output.= "<option value='$tupla[2]'>$tupla[id_incidente]</option>";
           
       }
       return $output;
       
   }
   
   function recuperar_Registro(){
       $vista=conectar();
       
   }
   
   function generar_Registro($lugar, $incidente){
       $vista=conectar();
       $stored = "CALL addRegistro(?,?)";
   }
   
 ?>