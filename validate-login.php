<?php
  session_start();
  $profiles = array(1=> 'admin', 2 => 'user');
  $users_app = array(
    array('profile_id' => 1, 'id' => 1, 'email' => 'admin@admin.com.br', 'password' => 'admin'),
    array('profile_id' => 1, 'id' => 2, 'email' => 'adm@admin.com.br', 'password' => 'adm'),
    array('profile_id' => 2,'id' => 3, 'email' => 'user@user.com.br', 'password' => 'user'),
    array('profile_id' => 2, 'id' => 4, 'email' => 'matheus@user.com.br', 'password' => 'matheus'),
  );
  foreach($users_app as $user) {
    $authenticated_user = $user['email'] == $_POST['email'] && $user['password'] == $_POST['password'];
    
    if($authenticated_user) {
      $_SESSION['autenticado'] = 'SIM';
      $_SESSION['id'] = $user['id'];
      $_SESSION['profile_id'] = $user['profile_id'];
      header('Location: home.php');
      break;
    } else {
      $_SESSION['autenticado'] = 'NAO';
      header('Location: index.php?login=erro');
    }
  }
?>