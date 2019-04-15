<?php
    session_start();
    
    error_reporting(0);
    $vsesion=$_SESSION['usuario'];
    if($vsesion==null||$vsesion=''){
        echo 'No cuenta con acceso para este sitio';
        die();
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
    <title>Laboratorio 13</title>
</head>

<body>
  <!-- SCRIPTS -->
  <!-- JQuery -->
<h1> Subida de archivos </h1>
<br><br>
    <div class="container">
    <h2>Hola usuario <?php echo $_SESSION['usuario'];?>, bienvenido a esta sitio de subida para imágenes</h2>
    <div clas="container">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    por favor seleccione una imagen para subir
    <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
    <br>
    <input type="submit" value="Subir imagen" name="submit">
</form>
</div class="cerrar">
<br>
  <a href="logout.php"> Cerrar sesión</a>
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