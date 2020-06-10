<?php

if (isset($_POST) || !empty($_POST))
{
	$name = $_POST["name"];
	$email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
}

/*
if (isset($_POST["name"]))
  {
  	echo "<pre>";
  	$name = $_POST["name"];
  	print_r($name);
  	echo "<br>";
  	print_r($_POST["name"]);
  	echo "</pre>";
  }
*/



if ($name === "" || $email === "" || $subject === "" || $message === ""){
  echo "Заполните все поля формы" . "<br>";
  exit;
}


// отправка

$subject = "=?utf-8?B?".base64_encode($subject)."?=";
$headers = "From: $email \n Reply-to:$email \n Content-type: text/plain; charset=utf-8 \n";
//mail("test@gmail.com", $subject, $message, $headers);
if (mail("laukart75@gmail.com", $subject, $message, $headers))
	echo "Сообщение отправлено" . "<br>";
else
	echo "Сообщение не отправлено" . "<br>";




?>