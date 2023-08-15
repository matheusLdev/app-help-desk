<?php require_once "access-validator.php"; ?>
<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/icon" rel="icon" href="./img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./style/style.css">
    
    <title>Home - Help Desk</title>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-dark bg-dark ps-3">
        <a class="navbar-brand " href="#">
          <img id="logo" class="d-inline-block align-top" src="./img/logo.png" alt="Logo">
          <span>Help Desk</span>
        </a>
        <ul class="navbar-nav pe-3">
          <li class="nav-item">
            <a href="logoff.php" class="nav-link">SAIR</a>
          </li>
        </ul>
      </nav>
    </header>

    <main class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              <span>Menu</span>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="open-call.php">
                    <img src="./img/open-form-called.png" alt="Abrir Chamado">
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="query-call.php">
                    <img src="./img/query-form-called.png" alt="Consultar Chamado">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>