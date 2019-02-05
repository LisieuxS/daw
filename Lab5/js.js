
function historia(){
  var nombre = document.getElementById("name").value;
  var edad = document.getElementById("age").value;
  var doctor = document.getElementById("doc").value;
  var organo = document.getElementById("organ").value;
  var room = document.getElementById("room").value;
  var asis = document.getElementById("asis").value;
  var historia;

  historia = "El paciente de nombre " + nombre + " de " + edad.toString() + " años de edad fue dado de alta por el Dr. " + doctor+ " después de haber terminado con su recuperación tras la operación de " + organo + ". La habitación " + room + " Ha sido desocupada. Atentamente: " + asis;

  document.getElementById("history").innerHTML = historia;
}


function validar(){
  var password = document.getElementById("password").value;
  var p2 = document.getElementById("p2").value;
  var message;

  if(password==="" || p2===""){
    message = "Por favor llene todos los campos";
  }else if(password === p2){
    message = "Acceso concedido";
  }else if(password !== p2){
    message="Contraseñas no compatibles";
  }
  document.getElementById("accessMessage").innerHTML = message;
}


function pagar(){
  var plu = document.getElementById("plu").value;
  var la = document.getElementById("la").value;
  var bo = document.getElementById("bo").value;
  var mar = document.getElementById("mar").value;
  var li = document.getElementById("li").value;
  var sa = document.getElementById("sa").value;
  var du = document.getElementById("du").value;
  var iva = document.getElementById("iva").value;
  var total;

  total = plu * 6 + la * 5 + bo * 10 + mar * 14 + li * 30 + sa * 20 + du * 2;
  total = total + (total * iva)/100;
  document.getElementById("totalPay").innerHTML = total;
} 


