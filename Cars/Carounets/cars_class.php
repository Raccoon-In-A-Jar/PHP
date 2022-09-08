<?php

if(count($_POST) > 0){
	$car = new \Objects\Cars(
		$_POST['brand']
		$_POST['color']
		$_POST['speed']
	)
};

var_dump($car);