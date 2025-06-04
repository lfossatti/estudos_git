<?php

require_once 'db.php';

function cadastrar_usuarios()
{
  echo "=> Cadastrar usuários <=";
  $dados[] = readline("Informe o login: \n");
  $dados[] = sha1(readline("Informe a senha: \n"));
  $dados[] = readline("Informe o nome: \n");
  $dados[] = readline("Informe o email: \n");
  $dados[] = readline("Informe a função: \n");

  $query = "INSERT INTO usuarios (login, senha, nome, email, funcao) VALUES (?, ?, ?, ?, ?)";
  $db = conectar();
  inserir($db, $query, $dados);
  desconectar_db($db);
}

function listarTodosUsuarios()
{
  echo "=> Listar usuários <= \n";

  $query = "SELECT * FROM usuarios";
  $db = conectar();
  $listarUsuarios = buscar($db, $query);
  desconectar_db($db);
  foreach($listarUsuarios as $usuario){
    // echo "| $usuario[3] | $usuario[4] | $usuario[5] | \n";
    echo  "|" .$usuario['nome'] ."|" .$usuario['email'] ."|" .$usuario['funcao'] ."| \n";
  }
}

function editar_usuarios()
{

  echo "=> Alterar usuários <= \n";
  echo "=> Qual usuario você deseja alterar? <= \n";
  $login = readline("Informe o login: ");
  $usuario = buscarPorLogin($login);

  // print_r($usuario);

  for($i=1;$i<count($usuario);$i++){
    echo "[$usuario[$i]]";
    $valor = readline(" > ");
    if (!$valor == ""){
      $usuario[$i] = $valor;
    }
    $valores[] = $usuario[$i];
  }
  $valores[] = $usuario[0];
  
  print_r($valores);
  $query = "UPDATE usuarios SET login = ?, senha = ?, nome = ?, email = ?, funcao = ? WHERE id = ?";
  // print_r($query);

  $db = conectar();
  editar($db, $query, $valores);
  desconectar_db($db);

}

function excluir_usuarios()
{

  echo "=> Excluir usuários <= \n";
  echo "=> Qual usuario você deseja excluir? <= \n";
  $login[] = readline("Informe o login: ");
  $query = "DELETE FROM usuarios WHERE login = ?";

  $db = conectar();
  $result = excluir($db, $query, $login);
  desconectar_db($db);
  if ($result){
    echo "Registro excluido com sucesso!";
  }
  else{
    echo "Erro ao excluir!";
  }
}

function buscarPorLogin($valor)
{
  $query = "SELECT * FROM USUARIOS WHERE login = ?";
  $db = conectar();
  $usuario = buscarUnico($db, $query, array($valor));
  desconectar_db($db);
  if (!$usuario){
    echo "Login não encontrado!";
    return 0;
  }
  return $usuario;
}

?>