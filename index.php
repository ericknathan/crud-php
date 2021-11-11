<?php
  session_start();
  if(isset($_SESSION["user_id"])) header('location: listagem/');
  else header('location: auth/login/');
?>