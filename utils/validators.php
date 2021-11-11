<?php

function validateAuth() {
	$errors = [];
	if(!isset($_POST['email']) || empty($_POST['email'])) {
		$errors[] = "O campo email é de preenchimento obrigatório";
	}
	if(!isset($_POST['password']) || empty($_POST['password'])) {
		$errors[] = "O campo senha é de preenchimento obrigatório";
	}
	return $errors;
}
