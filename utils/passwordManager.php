<?php

  function generateEncryptedPassword($password) {
    return password_hash($password, PASSWORD_ARGON2I);
  }

  function checkPassword($password, $hash) {
    return password_verify($password, $hash);
  }