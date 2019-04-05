<?php
function connect()
{
    $servername = "localhost";
    $username = "a01207648";
    $password = "";
    $dbname = "jurassicpark";
    $SQLconnection = mysqli_connect($servername, $username, $password, $dbname);
    if($SQLconnection == null) die("Connection failed: ".mysqli_connect_error());
    $SQLconnection->set_charset = " ";
    return $SQLconnection;
}

function close ($conn)
{
    mysqli_close($conn);
}

function seleccionarIncidente()
{
    $conn = connect();
    $result = "";
    $query = "CALL seleccionarIncidente()";
    $result = $conn->query($query);
    close($conn);
    return $result;
}

function seleccionarLugar(){
    
}

function agregarIncidente($id_lu, $id_in)
{
    $conn = connect();
    $sql = "CALL addRegistro(?,?)";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    $id_lu = $conn->real_escape_string($id_lu);
    $id_in = $conn->real_escape_string($id_in);
    if(!($statement->bind_param("ss",$id_lu,$id_in))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    else
    {
        $result=true;
    }
    
    $statement->close();
    close($conn);
    return $result;
}


  
  function recuperar_Lugar(){
       $vista=connect();
       $query='Select * from lugar';
       
       $despliegue=$vista->query($query);
       $output='<option value="0">Lugar del incidente</option>';
       
       while($tupla= mysqli_fetch_array($despliegue, MYSQLI_BOTH)){
           $output.= "<option value='$tupla[1]'>$tupla[nombre]</option>";
           
       }
       
       return $output;
       close($vista);
       
   }
      
  function recuperar_Incidente(){
       $vista=conectar();
       $query='Select * from incidente';
       
        $despliegue=$vista->query($query);
       $output='<option value="0">Incidente ocurrido</option>';
       
       while($tupla= mysqli_fetch_array($despliegue, MYSQLI_BOTH)){
           $output.= "<option value='$tupla[1]'>$tupla[nombre]</option>";
           
       }
       return $output;
       close($vista);
       
   }
      
      
  
?>