<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$id = $_POST["id"];

$sql = "INSERT INTO clientes (nome, email, id) VALUES (?,?,?)";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "ssi",
    $nome,
    $email,
    $id
);

mysqli_stmt_execute($stmt);


header("Location: ../index.php");
?>