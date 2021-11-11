<?php
	function getAllData($conn) {
		$sql = "SELECT * FROM tbl_user";
		$result = mysqli_query($conn, $sql);
		return $result;
	}
?>