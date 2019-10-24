<?php
   require_once("config.php");

   // DIRETO NO INDEX A BUSCA
   // $sql = new Sql();
   // $usuarios = $sql->select("SELECT * FROM tb_usuarios");
   // echo json_encode($usuarios);

   // DEVERIA TRAZER O USUARIO POR ID
   // $root = new Usuario();
   // $root->loadById(3);
   // echo $root;

   // CARREGA A LISTA DE USUARIOS
   // $lista = Usuario::getList();
   // echo json_encode($lista);

   // CARREGA UMA LISTA DE USUARIOS PROCURANDO POR LOGIN
   // $search = Usuario::search("ju");
   // echo json_encode($search);

   // CARREGA UM USUARIO USANDO LOGIN E SENHA
   $usuario = new Usuario();
   echo $usuario;
   // $usuario->login("root","123456");
   // echo $usuario;

?>