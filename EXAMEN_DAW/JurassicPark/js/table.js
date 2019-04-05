$(document).ready(function(){
    $.ajax({
       type: "GET",
       url: "../php/tablaIncidentes.php",
       success: function(data){
           $("#reporte").append(data);
       }
    }); 
});