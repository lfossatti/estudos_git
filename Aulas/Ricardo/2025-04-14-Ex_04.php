<?php

  # Informe a senha e compare com o sistema. Até que não acerte, continua pedindo senha...
  $senha_Sis = "1234";
  $senha = readline( "Informe sua senha: ");
  $x = 1;
  $ntentativas = 3;

  while ($senha != $senha_Sis) {
    if ($x < $ntentativas) {
      $tentativas = $ntentativas - $x;
      $senha = readline( "Senha incorreta, tente novamente!!! Restam  $tentativas tentativas: ");
      // $x++; //$x = $x + 1; // $x++ ou $x+=1
      $x++;
    }
    else {
      echo "Acesso negado! Você executou um número execessivo de tentivas!!! \n";
      exit(1);
      }
  }

  echo "<<< Acesso permitido! >>> \n";
?>