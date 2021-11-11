<?php

function validateAuth() {
	$errors = [];
	if(!isset($_POST['username']) || empty($_POST['username'])) {
		$errors[] = "O campo usuário é de preenchimento obrigatório";
	}
	if(!isset($_POST['password']) || empty($_POST['password'])) {
		$errors[] = "O campo senha é de preenchimento obrigatório";
	}
	return $errors;
}
