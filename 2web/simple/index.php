<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Hello</title>
</head>
<body>

<?php
  // URL?username=admin&password=1234
  if (! isset($_SESSION['token']) and count($_GET) > 0) { // Ce loguer
    if (isset($_GET['username']) and isset($_GET['password'])) {
      if ($_GET['username'] == "admin" and $_GET['password'] == "1234") {
        $_SESSION['token'] = TRUE;
      }
    }
  }
  elseif (isset($_SESSION['token'])) { // Si logué
    echo /** @lang HTML */ <<<EOF

<form action="addCars.php" method="POST">
  <label for="brand">Brand:</label>  <input type="text" name="brand">
  <label for="color">Color:</label>  <input type="text" name="color">
  <label for="speed">Speed:</label>  <input type="number" name="speed">
  <input type="submit" value="New Car !">
</form>

EOF;
  }
  else { // Register
    echo "Not Login<br>";
    echo "Indice: URL?username=admin&password=1234<br>";
    echo <<<EOF
<form action="register.php" method="POST">

  <label for="username">Username:</label>  <input type="text" name="username">
  
  <label for="password">Password:</label>  <input type="password" name="password">
  <label for="confirm_password">Confirm password:</label>  <input type="password" name="confirm_password">
  
  <label for="firstname">Firstname:</label>  <input type="text" name="firstname">
  <label for="lastname">Lastname:</label>  <input type="text" name="lastname">
  
  <input type="submit" value="Register !">
</form>
EOF;

  }
?>

</body>
</html>
