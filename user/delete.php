<?php
  include('../database/connection.php');
  deleteUser($conn, $_POST['user-id']);
  header('Location: ./');
?>