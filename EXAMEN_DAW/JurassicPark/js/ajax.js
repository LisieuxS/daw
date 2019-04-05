
function getRequestObject() {
  // Asynchronous objec created, handles browser DOM differences

  if(window.XMLHttpRequest) {
    // Mozilla, Opera, Safari, Chrome, IE 7+
    return (new XMLHttpRequest());
  }
  else if (window.ActiveXObject) {
    // IE 6-
    return (new ActiveXObject("Microsoft.XMLHTTP"));
  } else {
    // Non AJAX browsers
    return(null);
  }
}

function sendRequest(){

   let NUEVO_CODIGO = 1;
   
   if (NUEVO_CODIGO) {
       
       $.get( "selector.php", { pattern: document.getElementById('userInput').value })
          .done(function( data ) {
              var ajaxResponse = document.getElementById('ajaxResponse');
              ajaxResponse.innerHTML = data;
              ajaxResponse.style.visibility = "visible";
          });
       
   } else {
       
       request=getRequestObject();
       if(request!=null)
       {
         var userInput = document.getElementById('userInput');
         var url='selector.php?pattern='+userInput.value;
         request.open('GET',url,true);
         request.onreadystatechange = 
                function() { 
                    if((request.readyState==4)){
                        // Asynchronous response has arrived
                        var ajaxResponse=document.getElementById('ajaxResponse');
                        ajaxResponse.innerHTML=request.responseText;
                        ajaxResponse.style.visibility="visible";
                        //M.AutoInit();
                    }     
                };
         request.send(null);
       }
       
   }
   
   
}

function despliegue_lugar(){
    
     var request=getRequestObject();
       if(request!=null)
       {
         
         var url='controller.php';
         request.open('POST',url,true);
         request.onreadystatechange = 
                function() { 
                    if((request.readyState==4)){
                 
                        var ajaxResponse=document.getElementById('lugar');
                        ajaxResponse.innerHTML=request.responseText;
                        M.AutoInit();
                        
                     
                    }     
                };
         request.send(null);
       }
    
}


