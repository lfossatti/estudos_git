<?php

$estoque = [];

function menu() 
{
    echo "\n";
    echo "\033[36m===== MENU ESTOQUE =====\033[0m\n";
    echo "\n";
    echo "1. Listar produtos\n";
    echo "2. Entrada de produto\n";
    echo "3. Saída de produto\n";
    echo "0. Sair\n";
    echo "Escolha uma opção: ";
    echo "\n";
}

function listar(&$estoque) 
{
    if (empty($estoque)) {
        echo "\n";
        echo "-----------------------------------\n";
        echo "---------- Estoque vazio ----------\n";
        echo "-----------------------------------\n";
        echo "\n";
        return;
    }

    echo "\n";
    echo "----------------------------------------------------------\n";
    echo "\033[32m------------------  PRODUTOS NO ESTOQUE ------------------\033[0m\n";
    echo "----------------------------------------------------------\n";
    echo "\n";

    $cods = array_column($estoque, 'cod');
    print_r($cods);
    sort($cods);
    print_r($cods);
    array_multisort($estoque, $cods);

    foreach ($estoque as $id => $produto) {
        echo "ID: $id | Codigo: {$produto['cod']} | Nome: {$produto['nome']} | Qtd: {$produto['quantidade']} | Valor: R$ {$produto['valor']} | C_Medio: R$ {$produto['custo_medio']} \n";
    }
}

function adicionar(&$estoque)
{
  $cod = readline("Código do produto: ");
  $nome = "";

  foreach ($estoque as $key => $produto) {
    if ($cod == $produto['cod']) {
      $nome = $produto['nome'];
      $id = $key;
    }
  }
  if ($nome == "") {
    $nome = readline("Nome do produto: ");
    $quantidade = (int)readline("Quantidade: ");
    $valor = (float)readline("Valor (ex: 10.50): ");
    $custo_medio = $valor / $quantidade;

    $estoque[] = [
      'cod' => $cod,
      'nome' => $nome,
      'quantidade' => $quantidade,
      'valor' => $valor,
      'custo_medio' => $custo_medio
  ];    
  }
  else {
    $estoque[$id]['quantidade'] = $produto['quantidade'] + (int) readline("Alterar quantidade: ");
    $estoque[$id]['valor'] = $produto['valor'] + (float)readline("Valor (ex: 10.50): ");
    $estoque[$id]['custo_medio'] = ($estoque[$id]['valor'] / $estoque[$id]['quantidade']);
  }

  echo "\n\033[33m----------Produto adicionado com sucesso!----------\033[0m\n\n";
    
}

function remover(&$estoque) 
{
    listar($estoque);
    $cod = readline("Informe o código do produto: ");
    if (!isset($estoque[$cod])) {
        echo "Produto não encontrado.\n";
        return;
    }
    else {

      foreach ($estoque as $key => $produto ) {
        if ($cod == $produto['cod']) {
          $id = $key;
        }
      }
      $estoque[$id]['quantidade'] = $produto['quantidade'] - (int) readline("Alterar quantidade: ");
      $estoque[$id]['valor'] = $produto['valor'] - (float)readline("Valor (ex: 10.50): ");
      $estoque[$id]['custo_medio'] = ($estoque[$id]['valor'] / $estoque[$id]['quantidade']);
    }

//    echo "\n";
//    echo "\033[31m======================================================\033[0m\n";
//    echo "\033[31m O produto $produtoremovido foi removido com sucesso! \033[0m\n";
//    echo "\033[31m======================================================\033[0m\n";
//    echo "\n"; 

}

do {
    menu();
    $opcao = (int) readline();

    switch ($opcao) {
        case 1:
            listar($estoque);
            break;
        case 2:
            adicionar($estoque);
            break;
        case 3:
            remover($estoque);
            break;
        case 0:
            echo "Saindo...\n";
            exit;
        default:
            echo "Opção inválida!\n";
            echo "Tente novamente \n";
    }
} while ($opcao != 0);

?>