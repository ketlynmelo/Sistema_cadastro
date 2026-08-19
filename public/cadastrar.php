<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];

$sql = "INSERT INTO pratos (nome, descricao, preco, categoria, id_cliente) VALUES (?,?,?,?,?)";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param (
$stmt,
"ssds",
$nome, 
$descricao, 
$preco,
$categoria,
$id_cliente
);

mysqli_stmt_execute($stmt);

header("Location: ../index.php");



?>