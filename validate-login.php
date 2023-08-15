<?php
  session_start();
  $users_app = array(
    array('id' => 1, 'email' => 'admin@admin.com.br', 'password' => 'admin'),
    array('id' => 2, 'email' => 'adm@admin.com.br', 'password' => 'adm'),
    array('id' => 3, 'email' => 'user@user.com.br', 'password' => 'user'),
    array('id' => 4, 'email' => 'matheus@user.com.br', 'password' => 'matheus'),
  );
  foreach($users_app as $user) {
    $authenticated_user = $user['email'] == $_POST['email'] && $user['password'] == $_POST['password'];
    if($authenticated_user) {
      $_SESSION['autenticado'] = 'SIM';
      $_SESSION['id'] = $user['id'];
      header('Location: home.php');
      break;
    } else {
      $_SESSION['autenticado'] = 'NAO';
      header('Location: index.php?login=erro');
    }
  }
?>