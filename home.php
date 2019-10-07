<?php
//INICIO A SESSÃO
session_start();
 
//Verifico se o usuário está logado no sistema
if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
    header("Location: login.php");
}
else {
    echo "<h1>Seja bem-vindo, ".$_SESSION['user_logado']."</h1>";
    echo '<a href="sair.php">Sair</a>';

  
}
$nome = $_SESSION['nome'];
$usuario = $_SESSION['usuario'];
$id = 1;

echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">';

echo '<div class="jumbotron container">';
echo  '<div class="card-deck col-md-auto mb-3 text-center">';


//foreach($usuario as $rowla){

foreach (array_combine($usuario, $nome) as $teste => $www) {
   
   
         echo '<div class="card  shadow-sm">';
        echo '<div class="card-header">';
     echo  '<h4 class="my-0 font-weight-normal">'.$id ++; echo'</h4>';
    echo '</div>';
     echo '<div class="card-body">';
     echo  '<h1 class="card-title pricing-card-title">'.$www; echo '</h1>';
         echo  '<ul class="list-unstyled mt-3 mb-4">';
        echo    '<li>' .$teste; echo '</li>';
        echo  '</ul>';
        echo '</div>';
      echo'  </div>';
     
      
   
   
   
   
   // echo '<table border="1">';
//echo    '<tr>';
//echo        '<td>ID</td>';
//echo '<td>usuario</td>';
//echo '<td>email</td>';
//echo'<tr>';
  //  echo '<td>'.$id ++;
    //echo '</td>';

    //echo    '<td>'.$teste; 
   // echo '</td>';
   // echo '<td>'.$www;
   // echo '</td>';
    
   // echo '</tr>';
}

 echo'  </div>';
echo '</div>';




 



?>
