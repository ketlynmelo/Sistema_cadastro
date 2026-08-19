<?php

include "infra/conexao.php";

$usuarios = mysqli_query($conexao, "SELECT * FROM usuarios");

$resultado = null;

if (isset($_GET["usuario_id"]) && $_GET["usuario_id"] != "") {

    $usuario_id = $_GET["usuario_id"];

    $sql = "SELECT pratos.*, usuarios.nome AS usuario_nome
            FROM pratos
            INNER JOIN usuarios ON pratos.usuario_id = usuarios.id
            WHERE pratos.usuario_id = ?";

    $stmt = $conexao->prepare($sql);

    $stmt->bind_param("i", $usuario_id);

    $stmt->execute();

    $resultado = $stmt->get_result();
}