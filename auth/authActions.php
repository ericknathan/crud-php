<?php
	require('../database/connection.php');
	require("../utils/validators.php");
	require("../utils/passwordManager.php");

	if (empty($_SESSION)  && !isset($_SESSION)) session_start();

  $root = "/ericknathan/crud-php";

	if(!isset($_REQUEST["action"])){
		$_SESSION['errors'][] = "Não foi possível realizar essa ação";
		header("Location: $root");
		exit();
	}

	switch ($_REQUEST['action']) {
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

		$errors = validateAuth();
		verifyErrors($errors);
		
		$username = strtolower($_POST['username']);
		$textPassword = $_POST['password'];

		$sql = "SELECT * FROM tbl_admin WHERE username='$username'";
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