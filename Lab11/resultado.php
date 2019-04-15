<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laboratorio 11</title>
  </head>
  <body>

    <section class="contento">
      <h1>Datos guardados en el sistema</h1>
      

      <h3> Gracias por trabajar con la interfaz, <?php echo $name; ?>. Tus datos han podido ser llamados con exito: </h3>
      <p>Nombre completo: <?php  echo $lastname;?></p>
      <p>Fecha de nacimiento: <?php  echo $birth;?></p>
      <p>Género: <?php  echo $gender;?></p>
      <p>Correo: <?php  echo $email;?></p>
      <p>Contrasena: <?php  echo $password;?></p>
    </section>
  </body>
</html>