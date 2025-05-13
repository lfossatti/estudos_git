<?php

  # Faça uma pergunta ao usuário e repita até que ele acerta...
    
  echo "Qual a cor da lua? \n";
  
  do {
    $Resp = strtoupper(readline( ", \n"));
    # ECHO $Resp ."\n";
  } while (true);

  echo "<<< Parabéns, você acertou a cor da Lua ! >>> \n";
  
?>