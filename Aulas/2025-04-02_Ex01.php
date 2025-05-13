<?php
  # echo "Informe um número qualquer: ";
  $md = readline("Informe a media do aluno: ");
  $fr = readline("Informe a frequencia do aluno: ");
  
  # $numero = fgets(STDIN); // STDIN = Standard Input

  if (($md > 10 || $md < 0) || ($fr > 100 || $fr < 0)) {
    echo "Os dados informados não são vãlidos. Verifique!";}
  else
    if ($fr < 70 || $fr > 100) {
      echo "O aluno foi reprovado por faltas!";}
    else {
      if ($md >= 7 && $md <= 10) {
        echo "O aluno foi aprovado!";}
      else if ($md >= 5 && $md <= 7) {
        echo "O aluno ficou em exame!";}
      else { 
        # echo "O número informado é igual a 10!";
        fputs(STDOUT, "O Aluno foi reprovado por nota!");}
        }  // STDOUT = Standard Out = Video/tela
?>