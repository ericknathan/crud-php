<?php

  $HOST = "localhost";
  $USER = "root";
  $PASSWORD = "bcd127";
  $DATABASE = "db_cadastro";

  $conn = @new mysqli($HOST, $USER, $PASSWORD, $DATABASE);

  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  return $conn;

?>