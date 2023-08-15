<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/icon" rel="icon" href="./img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./style/style.css">
    <title>Login - Help Desk</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-dark bg-dark ps-3">
        <a class="navbar-brand " href="#">
          <img id="logo" class="d-inline-block align-top" src="./img/logo.png" alt="Logo">
          <span>Help Desk</span>
        </a>
      </nav>
    </header>
    <main class="container">    
      <div class="row">
        <div class="card-login">
          <div class="card">
            <div class="card-header">
              <span>Login</span>
            </div>
            <div class="card-body">
              <form action="validate-login.php" method="post">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group my-3">
                  <input type="password" name="password" class="form-control" placeholder="Senha">
                </div>
                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                  <p class="text-danger">Usuário ou senha inválido(s)</p>
                <?php } ?>
                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
                  <p class="text-danger">Faça login novamente</p>
                <?php } ?>
                <button class="btn btn-info" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>