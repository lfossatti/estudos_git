<?php

// Função recursiva (chama ela mesma)
$resp = 1;
$n = readline("Digite um valor para saber seu fatorial: " );
echo fatorial($n);

function fatorial($n) {

  if ($n == 0){
    return 1;
  }  
  return $n * fatorial($n-1);
}

?>