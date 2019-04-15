<?php
$target_dir = "archivos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "El archivo es una imagen de tipo: " . $check["mime"] . ".";
        echo "<br>";
        $uploadOk = 1;
    } else {
        echo "El archivo no es una imagen de formato valido. <br> Favor de revisar que archivo sea formato jpg, gif, png o jpeg";
        echo "<br>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "El archivo no existe <br>";
   
    $uploadOk = 0;
}

// revisa que el tamanio mida lo marcado
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "El archivo es de tamaño mayor al soportado <br>";

    $uploadOk = 0;
}

// revisa que el formato sea el indicado 
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Solo se permiten archivos png,jpg,jpeg o gif <br>";
   
    $uploadOk = 0;
}
// si se encuentra un error en $uploadOk 
if ($uploadOk == 0) {
    echo "El archivo no fue subido <br>";
  
// intenta hacer la subida a carpeta después de revisar todo lo de arriba
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "El archivo ". basename( $_FILES["fileToUpload"]["name"]). " se ha subido a la carpeta 'archivos' <br>";
    } else {
        echo "no se pudo subir el archivo";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="BOOTSTRAP/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="BOOTSTRAP/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="BOOTSTRAP/css/style.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
    <title>Subida</title>
</head>

<body>
    <br>
    <hr>

  <div class="container">
      <p>
      ¿Por qué es importante hacer un session_unset() y luego un session_destroy()?<br>
      Para liberar el espacio de memoria que se genera por conservar las sesiones abiertas<br>
        ¿Cuál es la diferencia entre una variable de sesión y una cookie?<br>
guarda partes de la pagina para que podamos acceder a ella rapidamente<br>
¿Qué técnicas se utilizan en sitios como facebook para que el usuario no sobreescriba sus fotos en el sistema de archivos cuando sube una foto con el mismo nombre?<br>
les da un nuevo nombre largo, necesita un algoritmo
¿Qué es CSRF y cómo puede prevenirse?<br>
 Cross Site Request Forgery (CSRF o XSRF) o falsificacion de peticion. evita aceptar que te guarden la contrasena dentro de un sitio<br><br>
</p>
  <a href="logout.php"> Cerrar sesión</a>
</div>
</div>
  <script type="text/javascript" src="loginjs.js"></script>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
</body>

</html>