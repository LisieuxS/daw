<?php 
    function connect() {
        $ENV = "dev";
        if ($ENV == "dev") {
            $mysql = mysqli_connect("localhost","a01207648","","jurassicpark");
                                            
        } else  if ($ENV == "prod"){
            $mysql = mysqli_connect("localhost","a01207648","","jurassicpark");
        }
                                            
        $mysql->set_charset("utf8");
        return $mysql;
    }

   
 ?>