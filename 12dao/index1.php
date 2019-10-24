<?php
   require_once("config.php");

   // DIRETO NO INDEX A BUSCA
   // $sql = new Sql();
   // $usuarios = $sql->select("SELECT * FROM tb_usuarios");
   // echo json_encode($usuarios);

   // DEVERIA TRAZER O USUARIO POR ID
   // $root = new Usuario();
   // $root->loadById(1);
   // echo $root;

   // CARREGA A LISTA DE USUARIOS
   // $lista = Usuario::getList();
   // echo json_encode($lista);

   // CARREGA UMA LISTA DE USUARIOS PROCURANDO POR LOGIN
   // $search = Usuario::search("ju");
   // echo json_encode($search);

   // CARREGA UM USUARIO USANDO LOGIN E SENHA
   // $usuario = new Usuario();
   // $usuario->login("root","123456");
   // echo $usuario;

   // INSERT SEM CONSTRUCT NA CLASSE
   // $aluno = new Usuario();
   // $aluno->setDeslogin("aluno");
   // $aluno->setDessenha("@alun0");
   // $aluno->insert();
   // echo $aluno;

   // INSERT COM CONSTRUCT NA CLASSE
   // $aluno2 = new Usuario("aluno2", "@lun02");
   // $aluno2->insert();
   // echo $aluno2;

   // UPDATE COM DAO
   // $usuario = new Usuario();
   // $usuario->loadById(8);
   // echo $usuario;
   // $usuario->update("supervisor", "sup3rv1s0r");
   // echo $usuario;

   // DELETE USUARIO
   $usuario = new Usuario();
   $usuario->loadById(9);
   $usuario->delete();
   echo $usuario;

?>