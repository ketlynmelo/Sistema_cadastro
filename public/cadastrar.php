<?php

include "../infra/conexao.php";

$nome = $POST["nome"];
$descricao = $POST["descricao"];
$preco = $POST["preco"];
$categoria = $POST["categoria"];

$sql = "INSERT INTO pratos (nome, descricao, preco, categoria) VALUES ('?','?','?','?')";

stmt = mysqli_prepare($conexao, $sql);

mysql_stmt_bind_param ($stmt, "ssii", $nome, $descricao, $preco, $categoria);

mysql_stmt_execute($stmt);

header("Location: ../index.php")


?>