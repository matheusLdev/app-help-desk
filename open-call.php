<?php require_once "access-validator.php"; ?>
<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/icon" rel="icon" href="./img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./style/style.css">
    <title>Abrir chamado - Help Desk</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-dark bg-dark ps-3">
        <a class="navbar-brand " href="home.php">
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
        <div class="card-open-call">
          <div class="card">
            <div class="card-header">
              <span>Abertura de chamado</span>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">             
                  <form action="register-call.php" method="post">
                    <div class="form-group">
                      <label>Título</label>
                      <input type="text" name="titulo" class="form-control" placeholder="Título">
                    </div>
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" class="form-control">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="row mt-4">
                      <div class="col-4">
                        <a href="home.php" class="d-block btn btn-warning">Voltar</a>
                      </div>
                      <div class="col-4">
                        <button class="btn btn-info" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>