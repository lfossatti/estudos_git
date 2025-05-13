<?php
  echo "Escolha uma opção abaixo: \n";
  echo "1 - Soma \n";
  echo "2 - Subtração \n";
  echo "3 - Multiplicação \n";
  echo "4 - Divisão \n";
  
  $num = readline("");

  switch ($num) {
    case 1:
      echo 1+1;
      break;
    case 2:
      echo 1-1;
      break;
    case 3:
      echo 1*1;
      break;
    case 4:
      echo 1/1;
      break;
    default:
      echo "Opção inválida selecionada";
      break;
  }
?>