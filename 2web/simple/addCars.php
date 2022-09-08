<?php

include "Objects/Cars.php";
use \Objects\Cars;


if (count($_POST) > 0) {
  $car = new Cars(
    $_POST['brand'],
    $_POST['color'],
    $_POST['speed']
  );

  define("USER", 'root');
  define("PASSWORD", 'root');
  define("DSN", 'mysql:host=localhost;dbname=2web');
  $pdo = new PDO(DSN, USER, PASSWORD);

  $sql = "INSERT INTO cars (brand, color, speed) VALUES(:brand, :color, :speed);";
  $sql = $pdo->prepare($sql);
  $sql->execute([
    ':brand' => $_POST['brand'],
    ':color' => $_POST['color'],
    ':speed' => $_POST['speed'],
  ]);

}

//header("Location: /index.php");
