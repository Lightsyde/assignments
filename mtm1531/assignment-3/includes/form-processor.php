<?php

$errors = array();

$possible_languages = array(
	'1st language' => 'English'
	, '2nd language' => 'French'
	, '3rd language' => 'Spanish'
);


$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$confirm_password = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_STRING);
$language = filter_input(INPUT_POST, 'language', FILTER_SANITIZE_STRING);

;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if(empty($name)) {
		$errors['name'] = true;
	}
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = true;
	}
	
	if(mb_strlen($username) < 4 || mb_strlen($username) > 25) {
		$errors['username'] = true;
	}
	
	if(empty($password)) {
		$errors['password'] = true;
	}
	if(empty($confirm_password) || $confirm_password != $password) {
		$errors['confirm_password'] = true;
	}
	if(!array_key_exists($language, $possible_languages)) {
		$errors['language'] = true;
	}
	
}