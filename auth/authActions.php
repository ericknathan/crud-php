<?php
	session_start();
	require('../database/connection.php');
	require("../utils/validators.php");
	require("../utils/passwordManager.php");

  $root = "/ericknathan/crud-php";

	if(!isset($_POST["action"])){
		$_SESSION['errors'][] = "Não foi possível realizar essa ação";
		header("Location: $root");
		exit();
	}

	switch ($_POST['action']) {
		case 'login':
			handleAuthSignIn();
			break;
		case 'logout':
			handleAuthLogout();
			break;
	}

	header("Location: $root");
	exit();

	function handleAuthSignIn() {
		global $conn;
		global $root;

		$errors = validateAuth();
		verifyErrors($errors);
		
		$email = strtolower($_POST['email']);
		$textPassword = $_POST['password'];

		$sql = "SELECT * FROM tbl_user WHERE email='$email'";
		$user = mysqli_fetch_array(mysqli_query($conn, $sql));

		if(checkPassword($textPassword, $user['password'])) {
			$_SESSION["user_id"] = $user['id'];
			$_SESSION["session_id"] = session_id();
			$_SESSION["date"] = date('d/m/Y - h:i:s');    
		} else {
			$_SESSION['errors'][] = "Usuário ou senha incorretos";
		}
	}

	function handleAuthLogout() {
		session_unset();
		session_destroy();
	}

	function verifyErrors($errors) {
		global $root;
		if(count($errors) > 0) {
			$_SESSION['errors'] = $errors;
			header("Location: $root/auth/login");
			exit();
		}
	}

?>