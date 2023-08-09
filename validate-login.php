<html lang="PT-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/icon" rel="icon" href="./img/logo.png">
    <title>Help Desk</title>
  </head>
  <body>
    <?php
      $users_app = array(
        array('email' => 'admin@admin.com.br', 'password' => 'admin'),
        array('email' => 'user@user.com.br', 'password' => 'user'),
      );
      foreach($users_app as $user) {
        $authenticated_user = $user['email'] == $_POST['email'] && $user['password'] == $_POST['password'];
        if($authenticated_user) {
          header('Location: home.php');
          break;
        } else {
          header('Location: index.php?login=error');
        }
      }
      
    ?>
  </body>
</html>