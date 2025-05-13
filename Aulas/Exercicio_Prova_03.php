<?php

  $Peso = readline("Informe seu peso em KG: ");
  $Altura = readline("Informe sua altura em CM: ");

  $Altura = $Altura / 100;
  
  $IMC = $Peso / ($Altura * $Altura);

  echo "Seu resultado é: " . $IMC;

  if ($IMC < 16) {
    echo "Seu resultado é: Magreza grave";}
  else if ($IMC < 17) {
    echo "Seu resultado é: Magreza moderada";}
  else if ($IMC < 18.5) {
    echo "Seu resultado é: Magreza leve";}
  else if ($IMC < 25) {
    echo "Seu resultado é: Peso normal";}
  else if ($IMC < 30) {
    echo "Seu resultado é: Sobrepeso";}
  else if ($IMC < 35) {
    echo "Seu resultado é: Obesidade grau I";}
  else if ($IMC < 40) {
    echo "Seu resultado é: Obesidade grau II";}
  else {
    echo "Seu resultado é: Obesidade grau III";}

?> 