<?php

function comparaIdade(){

return $a['idade'] - $b['idade'];
}


$users = array(

  array('nome' => 'Jorge Figueiredo', 'idade' => 29),
  array('nome' => 'Amanda de Souza', 'idade' => 24),
  array('nome' => 'Francisco Ferdinando', 'idade' => 28),
  array('nome' => 'Albuquerque', 'idade' => 36),
  array('nome' => 'Rosalinda Álvarez', 'idade' => 24)

);

usort($users, 'comparaIdade');


foreach ($users as $user) {
  
  echo $usuario['nome'] . ' - ' . $usuario['idade'] . ' anos' . "<br>";
}


?>

/*
nasc
Jorge 1995
Amanda 2000
Francisco 1996
Andressa 1988
Rosalinda 2000

*/