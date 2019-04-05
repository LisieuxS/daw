<?php
    require_once("util.php");
    if(isset($_POST["lugar"]) && isset($_POST["lugar"]) != "" && isset($_POST["tipo"]) && isset($_POST["tipo"]) != ""){
        $lugar=$_POST['lugar'];
        $tipo=$_POST['tipo'];
        $lugar=htmlspecialchars($lugar);
        $tipo=htmlspecialchars($tipo);
        
        if(strlen($lugar) > 0 and strlen($tipo) >0){
            if(agregarIncidente($lugar, $tipo)){
                echo" El incidente fue guardado exitosamente";
            }else{
                echo"El incidente no fue guardado";
            }
        }else{
            echo"Favor de introducir los datos";
        }
    }
    //header('Location: index.php');
?>