<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM pratos WHERE id = ?";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param ($stmt, "i", $id);

mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

$pratos =mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>Restaurante KECAGA</h1>
    </header>
    <main>
        <h2>Editando o prato<?php echo $pratos["nome"]?>!</h2>
        <form action="atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $pratos["id"]?>">

            <label for="titulo">Nome:</label>
            <input type="text" name="nome" value="<?php echo $pratos["nome"]?>">
            <br>
            <label for="autor">Descriçâo:</label>
            <input type="text" name="descricao" value="<?php echo $pratos["descricao"]?>">
            <br>
            <label for="ano">Preço:</label>
            <input type="number" name="preco" value="<?php echo $pratos["preco"]?>">
            <br>
            <label for="autor">Categoria:</label>
            <input type="text" name="categoria" value="<?php echo $pratos["categoria"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>

    </main>
    <footer>

    </footer>


</body>

</html>