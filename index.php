<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

/* --- Carrega usuário pelo ID ----
$root = new Usuario();
$root->loadById(3);
echo $root;*/

/* --- carrega uma lista de usuários ----
$lista = Usuario::getList();
echo json_encode($lista);*/

/* --- carregua uma lista pelo nome do usuário ---
$search = Usuario::search("jo");
echo json_encode($search); */

/* --- Valida usuário ---
$usuario = new Usuario();
$usuario->login("João","!@#$");
echo $usuario;*/

//Cadastra novo usuário
/*$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");

$aluno->insert();*/
/*
//usando método construtor para setar login e senha
$aluno = new Usuario("Ricardo", "R1c4rd0");
$aluno->insert();

echo $aluno;*/

$usuario = new Usuario();
$usuario->loadById(7); //busca primeiro o registro para pegar o id e passar na função de update
$usuario->update("Professor","M@st3r" );

echo $usuario;
?>