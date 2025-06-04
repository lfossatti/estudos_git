<?php

function conectar(){
  
    // dados da conexão
    $host = 'localhost'; // '127.0.0.1'; // ou 'localhost'
    // $port='3306';
    // $socket="";
    $username = 'root';
    $password = '';
    $dbname = 'php_testes'; // "aluno18"
    
    $db = mysqli_connect($host, $username, $password, $dbname);
    
    if (!$db) {
        die("Não foi possível conectar");
    }

    return $db;

// $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
// 	or die ('Could not connect to the database server' . mysqli_connect_error());
//$con->close();

};

function desconectar_db($db){
  mysqli_close($db);
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

//$db, $tabela, $campos, $dados
function inserir($db, $query, $dados)
{
  $result = mysqli_execute_query($db, $query, $dados);
  if (!$result) {
    return "Erro ao inserir usuario";
  }
  return $result;
  
  // $sql = "Insert into $tabela ($campos) values ($dados)";
  // $resultado = mysqli_query($conexao, $sql);

  // $var = consulta($conexao);
  // exibir_retorno($var);
}

function buscar($db, $query)
{
  $result = mysqli_execute_query($db, $query);
  $array = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $array;
}

function buscarUnico($db, $query, $parametro)
{
  $result = mysqli_execute_query($db, $query, $parametro);
  $array = mysqli_fetch_array($result, MYSQLI_NUM);
  return $array;
}

function editar($db, $query, $dados)
{  
  $result = mysqli_execute_query($db, $query, $dados);
  if (!$result) {
    return "Erro ao atualizar";
  }
  return $result;
  
}

function excluir($db, $query, $dados)
{  
  $result = mysqli_execute_query($db, $query, $dados);
  if (!$result) {
    return "Erro ao excluir";
  }
  return $result;
  
}

?>