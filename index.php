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

$usuario = new Usuario();
$usuario->login("root", "rick");

echo $usuario;

?>


