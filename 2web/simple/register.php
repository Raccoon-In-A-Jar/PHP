<?php

include "Objects/Users.php";
use \Objects\Users;

session_start();

if ( ! isset($_SESSION['token']) and count($_POST) > 0) {

  if ($_POST['password'] == $_POST['confirm_password']) {
    define("USER", 'root');
    define("PASSWORD", 'root');
    define("DSN", 'mysql:host=localhost;dbname=2web');
    $pdo = new PDO(DSN, USER, PASSWORD);

    $sql = "INSERT INTO users (username, password, firstname, lastname) VALUES(:username, :password, :firstname, :lastname);";
    $sql = $pdo->prepare($sql);
    $result = $sql->execute([
      ':username' => $_POST['username'],
      ':password' => $_POST['password'],
      ':firstname' => $_POST['firstname'],
      ':lastname' => $_POST['lastname'],
    ]);

    if ($result == TRUE) {
      $_SESSION['token'] = TRUE;
    }
  }

}

//header("Location: index.php");