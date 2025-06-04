<?php

main();

function main(){
  echo "=========== MENU ===========\n";
  echo "===> Escolha uma opção: <===\n";
  echo "1 - Consultar\n";
  echo "2 - Inserir\n";
  echo "============================\n";

  $op = readline(":\n");

  switch ($op) {
    case 1:
      $conn = conexao();
      $reg = consulta($conn);
      exibir_retorno($reg);
      break;
    case 2:
      $conn = conexao();
      $nome = readline("Informe o nome: \n");
      $email = readline("Informe o email: \n");
      $tabela = "pessoa";
      $campos = "`nome`, `email`";
      $valores = "$nome , $email";
      $status = insere($conn, $tabela, $campos, $valores);
      break;
    default:
      echo "Opção selecionada não é valida! Verifique...";
      exit;
  }  
}

function conexao(){
  
    // dados da conexão
    $host = 'localhost'; // '127.0.0.1'; // ou 'localhost'
    // $port='3306';
    // $socket="";
    $username = "root";
    $password = "";
    $dbname = "php_testes"; // "aluno18"
    
    $conexao = mysqli_connect($host, $username, $password, $dbname);
    
    if (!$conexao) {
        die("Não foi possível conectar");
    }

    return $conexao;

// $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
// 	or die ('Could not connect to the database server' . mysqli_connect_error());
//$con->close();

};

function fecha_conn($conexao){
  mysqli_close($conexao);
}

function consulta($conexao){

  $sql = "Select * from pessoa";
  $resultado = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($resultado) > 0) {
    $registros = mysqli_fetch_all($resultado); 
  }

  return $registros;

}

function exibir_retorno($registros){
  foreach ($registros as $key => $values){
    print_r ($values);
  }
}

function insere($conexao, $tabela, $campos, $dados){
  $sql = "Insert into $tabela ($campos) values ($dados)";
  $resultado = mysqli_query($conexao, $sql);

  $var = consulta($conexao);
  exibir_retorno($var);
}

?>