<?php 
  session_start();
  $text_call = $_SESSION['id'] . ' || ' . implode(' || ', str_replace('||', '#', $_POST)) . PHP_EOL;
  $file_calls = fopen('file-calls.txt', 'a');
  fwrite($file_calls, $text_call);
  fclose($file_calls);
  header('Location: open-call.php');
?>