<?php
  include('../utils/passwordManager.php');

	function getUser($conn, $userId) {
		$sql = "SELECT * FROM tbl_user WHERE id = '$userId'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0) {
			return mysqli_fetch_assoc($result);
		}
		return null;
	}

	function createUser($conn, $name, $surname, $email, $phone, $isAdmin, $username, $password) {
		$sql = "";

		$textPassword = generateEncryptedPassword($password);

		if($isAdmin) $sql = "INSERT INTO tbl_admin (name, surname, email, phone, username, password) VALUES ('$name', '$surname', '$email', '$phone', '$username', '$textPassword')";
		else $sql = "INSERT INTO tbl_user (name, surname, email, phone) VALUES ('$name', '$surname', '$email', '$phone')";
		
		if(mysqli_query($conn, $sql)) return true;
		
		echo mysqli_error($conn);
		return false;
	}
	
	function editUser($conn, $userId, $name, $surname, $email, $phone) {
		$sql = "UPDATE tbl_user SET name = '$name', surname = '$surname', email = '$email', phone = '$phone' WHERE id = '$userId'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_affected_rows($conn) > 0) {
			return true;
		}
		return false;
	}

	function deleteUser($conn, $user_id) {
		$sql = "DELETE FROM tbl_user WHERE id = '$user_id'";
		$result = mysqli_query($conn, $sql);
		return $result;
	}
?>