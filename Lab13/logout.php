<?php
    session_start();
    error_reporting(0);
    $vsesion=$_SESSION['usuario'];
    if($vsesion==null||$vsesion=''){
        echo 'No cuenta con acceso para este sitio';
        die();
    }
    session_unset();
    session_destroy();
    header("Location:login.html");
?>