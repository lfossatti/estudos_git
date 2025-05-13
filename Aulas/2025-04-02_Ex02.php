<?php
  # echo "Informe um número qualquer: ";
  $idade = readline("Informe a sua idade: ");
  $doenca = readline("Você possui alguma doença crônica? Informe 1 - Sim ou 2 - Não ");
  $gravida = readline("Você é gestante? Informe 1 - Sim ou 2 - Não ");
  
  # $numero = fgets(STDIN); // STDIN = Standard Input

  if (($idade > 130 || $idade < 0) || ($doenca > 2 || $doenca < 1) || ($gravida > 2 || $gravida < 1)) {
    echo "Os dados que você informou estão incorretos. Tente novamente!";}
  else
    if ($idade >= 60 || $doenca == 1 || $gravida == 1) {
      echo "Você tem atendimento prioritário!";}
    else {
      fputs(STDOUT, "Você terá que esperar o atendimento normal!");}
      // STDOUT = Standard Out = Video/tela
?>