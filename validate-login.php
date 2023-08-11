<?php
  session_start();
  $users_app = array(
    array('email' => 'admin@admin.com.br', 'password' => 'admin'),
    array('email' => 'user@user.com.br', 'password' => 'user'),
  );
  foreach($users_app as $user) {
    $authenticated_user = $user['email'] == $_POST['email'] && $user['password'] == $_POST['password'];
    if($authenticated_user) {
      $_SESSION['autenticado'] = 'SIM';
      header('Location: home.php');
      break;
    } else {
      $_SESSION['autenticado'] = 'NAO';
      header('Location: index.php?login=erro');
    }
  }
?>