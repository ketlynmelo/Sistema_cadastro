<?php

include "infra/conexao.php";

$usuarios = mysqli_query($conexao, "SELECT * FROM usuarios");

?>

