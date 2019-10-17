<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
// $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ? ?"); Caso tenha mais de um where

$id = 2;

$stmt->execute(array($id));
// $stmt->execute(array($id, $outro?)); Caso tenha mais de um where

// $conn->rollback();
$conn->commit();

echo "Deletado com sucesso!<br/>";
echo "Deletado com sucesso!<br/>";

?>