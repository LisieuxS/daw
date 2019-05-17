   

<?php
    
/* -------------------- Funcion para conectarse a la base de datos ---------------------------------------------------------------------------------------------------*/
    function conectDb(){
            $servername = "mx46.hostgator.mx";
            $username = "serescap_marlagr";
            $password = "TWuW~MzkbD2V";
            $dbname = "serescap_serescapaces";
            $con = mysqli_connect($servername,$username,$password,$dbname);
            //Check connection
        if(!$con){
            die("Connection failed: ".mysqli_connect_error("error al conectar con la base de datos"));
        }
        $con->set_charset("utf8");
        return $con;  
    }
/* -------------------- Funcion para cerrar la base de datos --------------------------------------------------------------------------------------------------------*/    
    function closeDb($mysql){
        mysqli_close($mysql);
    }


/* -------------------- OBTENER SELECT CON SECCIONES ----------------------------------------------------------------------------------------------------*/
    function obtenerSeccion($value_select = null) {
        $bd = conectDb();
        $query = 'SELECT nombre, descripcion, id_sec FROM seccion Where visibilidad=1';
        $results = $bd->query($query);
        $print .= '<div class="input-group mb-3"><div class="input-group-prepend"> <label class="input-group-text" for="inputGroupSelect01">Secciones</label></div>';
        $print .='<select  value=" '; 
        $print .= $value_select;
        $print .= '" id="seccion" name="seccion" class="custom-select"  required>';
        $print .= '<option value="">Escoge una sección</option>';
        while ($row = mysqli_fetch_array($results, MYSQLI_BOTH)) {
            if ($value_select == $row['id_sec'])
            {
              $print .= '<option value="'.$row['id_sec'].'" selected>'.$row['nombre'].'</option>';  
            }else{
            $print .= '<option value="'.$row['id_sec'].'">'.$row['nombre'].'</option>';
            }
        }
        $print .= '</select></div>';
        $print .= "value: ".$value_select;
        closeDb($bd);
         return $print;
    }

?>