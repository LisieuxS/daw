    <?php
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
    
    ?>