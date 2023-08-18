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

$usuario = new Usuario();
$usuario->login("João","!@#$");
echo $usuario;

?>