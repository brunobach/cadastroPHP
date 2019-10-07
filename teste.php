<?php
  session_start();
  //session_destroy();
echo "<pre>";
  print_r($_SESSION['usuario']);
  print_r($_SESSION['senha']);
  print_r($_SESSION['nome']);
  print_r($_SESSION['user_logado']);
  print_r($_SESSION['sexo']);
echo "</pre>";