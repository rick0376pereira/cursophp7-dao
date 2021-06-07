<?php 

require_once("config.php");

//Carrega um usuário
//$root = new Usuário();
//&root->loadbyId(3)
//echo $root;

//Carrega uma lista de usários
//$lista = Usuário::getList();
//echo json_encode($lista);

//Carrega uma lista de usários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usário usando o login e a senha

//Modificando para otimizar
// $aluno = new Usuario();

//$usuario = new Usuario();
//$usuario->login("root", "rick");
//$aluno->insert();
//echo $usuario;

//$aluno = new Usuario("aluno", "@lun0");

//$aluno->insert();

//echo $aluno;

/* Altera os dados deletando
$usuario = new Usuario();

$usuario->loadById(7);

$usuario->update("professor", "rick");

echo $usuario;*/

$usuario = new Usuario();

$usuario->loadById(6);

$usuario->delete();

echo $usuario;

?>
