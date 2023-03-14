<?php
$connection = mysqli_connect("localhost", "root", "", "examprogramroles");

if (isset($_POST['signup'])) {

  if (
    strlen($_POST['name']) >= 1 && strlen($_POST['mail']) >= 1 && strlen($_POST['phone']) >= 1
    && strlen($_POST['password']) >= 1 && strlen($_POST['id_authorization']) >= 1
  ) {

    $name = trim($_POST['name']);
    $mail = trim($_POST['mail']);
    $phone = trim($_POST['phone']);
    $password = trim($_POST['password']);
    $id_authorization = trim($_POST['id_authorization']);

    $consult = "INSERT INTO users (name, mail, phone, password, id_authorization)
    VALUES ('$name', '$mail','$phone','$password', '$id_authorization' )";

    mysqli_query($connection, $consult);
    mysqli_close($connection);

    header('Location: ../views/userView.php');
  }
}









?>