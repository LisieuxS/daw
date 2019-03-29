<?php
    session_start();
    require_once("util.php");
    include("_header.html");
    connect();
    include("_formaRegistroIncidente.html");
    include("_tablaIncidentes.html");
   
            include("_footer.html");
    
?>