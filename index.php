<?php 

require_once("config.php");

//$root = new Usuario();

//$root->loadbyId(1);

//echo $root;

//$lista = Usuario::getList();

//echo json_encode($lista);

//$search = Usuario::search("jo");

//echo json_encode($search);

//$usuario = new Usuario();
//$usuario->login("jose","1234567"); 
//echo $usuario;

//$aluno = new Usuario("rodrigo","lichiking");
//$aluno->setDeslogin("rodrigo");
//$aluno->setDessenha("lichiking");

//$aluno->insert();

//echo $aluno;

//$usuario = new Usuario();

//$usuario->loadById(8);

//$usuario->update("professor","1234");

//echo $usuario;
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();

echo $usuario;
 ?>