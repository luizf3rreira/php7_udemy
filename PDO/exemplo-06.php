<?php 

$conn = new PDO("mysql:dbname=dbpph7;host=localhost", "root", "123456");

$conn->beginTransactioin();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollback();

$conn->commit();

echo "Delete OK!";

 ?>