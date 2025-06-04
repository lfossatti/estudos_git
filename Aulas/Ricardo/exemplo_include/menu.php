<?php

// require = 
// include = 

require 'usuarios.php';

function exibeMenu()
{
  echo "===================================== \n" ;
  echo "Informe a opção desejada \n";
  echo "1 - Cadastrar usuário \n";
  echo "2 - Listar usuário \n";
  echo "3 - Editar usuário \n";
  echo "4 - Excluir usuário \n";
  echo "===================================== \n" ;
 
  $op = readline("Informe uma opção: ");
  return $op;
}

function processaOpcao($op)
{
  switch ($op){
    case 1: cadastrar_usuarios();
    break;
    case 2: listarTodosUsuarios();
    break;
    case 3: editar_usuarios();
    break;
    case 4: excluir_usuarios();
    break;
    default:
      echo "Opção selecionada não é valida! Verifique...";
      exit;
    }
}

?>