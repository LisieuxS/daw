<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laboratorio 11</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <!--Barra de navegacion-->
    <a href="preguntas.html">Preguntas</a>
 


    <section class="content">
      <h1>Laboratorio de PHP</h1>
      <h3>Registro de datos</h3>
      <p class="error">* Campo requerido</p>

      <?php require 'scripts.php'; ?>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Usuario: <input type="text" name="name">
        <span class="error">* <?php echo $nameError;?></span>
        <br><br>
        Nombre completo: <input type="text" name="lastname">
        <br><br>
        Fecha de nacimiento: <input type="date" name="birth">
        <span class="error">* <?php echo $birthError;?></span>
        <br><br>
        Género:
        <input type="radio" name="gender" value="female">Femenino
        <input type="radio" name="gender" value="male">Masculino
        <br><br>
        Correo: <input type="email" name="email">
        <span class="error">* <?php echo $emailError;?></span>
        <br><br>
        Contraseña: <input type="password" name="password">
        <span class="error">* <?php echo $passwordError;?></span>
        <br><br>
        <button type="submit" name="button">Registrar mi cuenta</button>
      </form>

      <?php
        require 'resultado.php';
      ?>

    </section>
  </body>
</html>