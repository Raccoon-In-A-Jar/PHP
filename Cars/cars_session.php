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
	
<?php //login
	if (!isset ($_SESSION['token']) and count($_GET) > 0){
		if (isset($_GET['username']) & isset($_GET['password'])){
			if($_GET['username'] == "admin" and $_GET['password'] == "1234"){
				$_SESSION['token'] = TRUE;
			}
		}
	}

	elseif (isset($_SESSION['token']) and $_SESSION['token'] == TRUE) { //if already logged in
		# code...
		echo /** @lang HTML */ <<<EOF

<from action = "/index.php" method="POST">
	<input type="text" name="brand">
	<input type="text" name="color">
	<input type="number" name="speed">
</from>

EOF;
	}
	else{ //not logged in
		echo "Not logged in";
		$_SESSION['token'] = TRUE;
	}

</body> 