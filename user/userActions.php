<?php
  include('../database/connection.php');
  include('./functions.php');

  switch ($_POST['action']) {
    case 'edit':
      $editStatus = editUser($conn, $_POST['user-id'], $_POST['user-name'], $_POST['user-surname'], $_POST['user-email'], $_POST['user-phone']);
      if(!$editStatus) {
        $_SESSION['errors'][] = "Erro ao editar usuário!";
      }
      return header('Location: ../listagem/');
      break;
    case 'create':
      if(isset($_POST['user-is-admin'])) {
        $createStatus = createUser($conn, $_POST['user-name'], $_POST['user-surname'], $_POST['user-email'], $_POST['user-phone'], true, $_POST['user-username'], $_POST['user-password']);
      } else {
        $createStatus = createUser($conn, $_POST['user-name'], $_POST['user-surname'], $_POST['user-email'], $_POST['user-phone'], false, null, null);
      }

      if(!$createStatus) {
        $_SESSION['errors'][] = "Erro ao criar usuário!";
      }
      return header('Location: ../listagem/');
      break;
  }