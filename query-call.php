<?php 
  require_once "access-validator.php"; 
  
  $calls = array();
  $file_calls = fopen('file-calls.txt', 'r');
  while(!feof($file_calls)) {
    $register = fgets($file_calls);
    $register_details = explode('#', $register); 
    if($_SESSION['profile_id'] == 2) {
      if($_SESSION['id'] != $register_details[0]) {
        continue;
      } else {
        $calls[] = $register;
      } 
    } else {
      $calls[] = $register; 
    }
  }
  fclose($file_calls);
?>
<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/icon" rel="icon" href="./img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./style/style.css">
    <title>Consultar Chamado - Help Desk</title>
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
    <main class="container mt-3">    
      <div class="row">
        <div class="card-query-call">
          <div class="card">
            <div class="card-header">
              <span>Consulta de chamado</span>
            </div>
            <div class="card-body">
            <?php 
              foreach($calls as $call) {
                $call_data = explode('||', $call);
                if(count($call_data) < 3){
                  continue;
                }
            ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?=$call_data[1]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?=$call_data[2]?></h6>
                  <p class="card-text"><?=$call_data[3]?></p>
                </div>
              </div>
            <?php } ?>
              <div class="row mt-4">
                <div class="col-2">
                  <a href="home.php" class="d-block btn btn-warning">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>