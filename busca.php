<?php
//INICIO A SESSÃO
session_start();


//$mostrar = $_SESSION['usuario'];

$nome = $_SESSION['nome'];
$usuario = $_SESSION['usuario'];
$id = 1;



//$_GET['sexo'] = $_SESSION['sexo']['masculino'];

//print_r($_SESSION['sexo']);


echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">';


//if($masculino = $masculino['masculino']){
  //  echo 'teste';
//}

$sexo = $_SESSION['sexo'];

foreach(in_array($_GET['sexo'], $_SESSION['sexo']){
    print_r($_SESSION['sexo'])
}


//print_r($conta);


if(in_array($_GET['sexo'], $_SESSION['sexo'])){

    print_r($conta);
    echo '<div class="jumbotron container">';
    echo  '<div class="card-deck col-md-auto mb-3 text-center">';
    
    
    
    
    
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
         
    }
    
     echo'  </div>';
    echo '</div>';
}else{
    print_r($_GET['sexo']);
}






?>