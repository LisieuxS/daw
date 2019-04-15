<?php
  $name = $lastname = $birth = $gender = $email = $password = NULL;
  $nameError = $birthError = $emailError = $passwordError = NULL;


  if (isset($_POST["name"])) {
    $name = test_input($_POST["name"]);
    // $nombre = $_POST["nombre"];
  } else {
    $nameError = "Nombre requerido";
  }
  if (isset($_POST["lastname"])) {
    $lastname = test_input($_POST["lastname"]);
  } else {
    $lastname = "";
  }
  if (isset($_POST["birth"])) {
    $birth = test_input($_POST["birth"]);
  } else {
    $birthError = "Fecha de nacimiento requerida";
  }
  if (isset($_POST["gender"])) {
    $gender = test_input($_POST["gender"]);
  } else {
    $gender = "";
  }
  if (isset($_POST["email"])) {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Formato invalido";
    }
  } else {
    $emailError = "Correo requerido";
  }
  if (isset($_POST["password"])) {
    $password = test_input($_POST["password"]);
  } else {
    $passwordError = "Contrasena requerida";
  }

//   $nombre="patito";
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>