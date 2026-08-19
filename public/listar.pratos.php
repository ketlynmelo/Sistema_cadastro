<?php

include "infra/conexao.php";

$sql = "SELECT pratos.*, usuarios.nome AS usuario_nome
        FROM pratos
        INNER JOIN usuarios ON pratos.usuario_id = usuarios.id";

$pratos = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>

    <header>
        <h1>Restaurante - KECAGA</h1>
    </header>

    <main>

        <h2>Pratos Cadastrados</h2>

        <table>

            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Cadastrado por</th>
                <th>Ações</th>
            </tr>

            <?php while ($prato = mysqli_fetch_assoc($pratos)) { ?>

                <tr>

                    <td><?php echo $prato["nome"]; ?></td>

                    <td><?php echo $prato["descricao"]; ?></td>

                    <td><?php echo $prato["preco"]; ?></td>

                    <td><?php echo $prato["categoria"]; ?></td>

                    <td><?php echo $prato["usuario_nome"]; ?></td>

                    <td>
                        <a href="public/editar.php?id=<?php echo $prato["id"]; ?>">
                            Editar
                        </a>

                        <a href="public/excluir.php?id=<?php echo $prato["id"]; ?>">
                            Excluir
                        </a>
                    </td>

                </tr>

            <?php } ?>

        </table>

    </main>

    <footer>

    </footer>

</body>

</html>