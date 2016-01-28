<?php
/**
 * Created by PhpStorm.
 * User: marochkin_pe
 * Date: 28.01.2016
 * Time: 15:49
 */

$mail_to = 'petun911@gmail.com';


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


if ($name && $email && $phone && $message) {
	$body[] = "Имя:" . $name;
	$body[] = "Email:" . $email;
	$body[] = "Телефон:" . $phone;
	$body[] = "Сообщение:" . $message;

	mail($mail_to, 'Новое письмо с сайта', implode("\n", $body));
	echo 'success';
}

