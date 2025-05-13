<?php

  # Peça ao usuário para inserir um numero. O programa deve exibir a taboada do numero de 1 até 10

  $numero = readline("Informe um numero qualquer, para obter a tabuada: ");
  
  // $i = Contador... não precisa declarar antes, pode inicializar dentro do for...
    for($i=0; $i<10; $i++) {
      echo "A tabuada do " .$numero ." é: " .$numero ." x " .$i+1 ." = " .$numero * ($i+1)  ."\n";
    }

?>