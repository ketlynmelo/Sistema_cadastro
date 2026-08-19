<?php

include "infra/conexao.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante </title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1> Restaurante </h1>
    </header>
    <main>
        <h2>Adicione um novo prato!</h2>
        <form action="public/cadastrar.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
            <br>
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao">
            <br>
            <label for="preco">Preço:</label>
            <input type="number" name="preco">
            <br>
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria">
            <br>
            <button type="submit">Cadastrar</button>
        </form>
        <div>
            <h2>Pratos cadastrado</h2>
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                </tr>
                <?php while ($pratos = mysqli_fetch_assoc($resultado)) { ?>
                    <tr>
                        <td><?php echo $pratos["nome"] ?></td>
                        <td><?php echo $pratos["descricao"] ?></td>
                        <td><?php echo $pratos["preco"] ?></td>
                        <td><?php echo $pratos["categoria"] ?></td>
                        <td>
                            <a href="public/editar.php?id=<?php echo $pratos["id"] ?>">Editar</a>
                            <a href="public/excluir.php?id=<?php echo $pratos["id"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>                                           
                
         <h2>Cadastrado de usuario</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>-
                </tr>
                <?php while ($pratos = mysqli_fetch_assoc($pratos)) { ?>
                    <tr>
                        <td><?php echo $pratos["id"] ?></td>
                        <td><?php echo $pratos["Nome"] ?></td>
                        <td><?php echo $pratos["Email"] ?></td>
                        <td>
                           

    </main>
    <footer>

    </footer>


</body>

</html>