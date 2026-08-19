<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];

$sql = "UPDATE pratos 
        SET nome = ?, 
        descricao = ?, 
        preco = ?,
        categoria = ?
        WHERE id = ?";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "ssdsi",
    $nome,
    $descricao,
    $preco,
    $categoria,
    $id
);

mysqli_stmt_execute($stmt);

header("Location: ../index.php");

?>