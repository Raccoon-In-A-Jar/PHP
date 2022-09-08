<?php

/*
 * CONTROLLERS INCLUDE
 */
include "Controllers/CarsController.php";


/***************
 *    START    *
 ***************/
if (count($_GET) > 0) {

  $controllerName = $_GET['controller'] ?? FALSE;
  $controllerMethod = $_GET['method'] ?? "index";

  if ($controllerName != FALSE) {

    $controllerNamespace = "\\Controllers\\$controllerName";
    $controller = new $controllerNamespace();

    if (is_callable( [$controller, $controllerMethod] )) {
      echo $controller->$controllerMethod();
    }
    else {
      echo "INVALID: Method";
      exit();
    }

  }

}
else {
  echo "Call Me !!<br>";
  echo "Indice: ?controller=TEST&method=TEST";
}
