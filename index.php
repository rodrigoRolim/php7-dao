<?php 

require_once("config.php");

//$root = new Usuario();

//$root->loadbyId(1);

//echo $root;

//$lista = Usuario::getList();

//echo json_encode($lista);

//$search = Usuario::search("jo");

//echo json_encode($search);

$usuario = new Usuario();
$usuario->login("jose","1234567"); 
echo $usuario;
 ?>