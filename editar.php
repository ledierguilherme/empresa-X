<?php
require("./funcoes.php");

$funcionarioId = $_GET["id"];

$funcionario = buscarFuncionarioPorId("./empresaX.json", $funcionarioId);

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <script src="https://kit.fontawesome.com/a757f2d5f7.js" crossorigin="anonymous"></script>
    <script src="./script.js" defer></script>
    <title>Empresa X</title>
</head>

<body>
    <div class="container-form">
        <form id="form-funcionario" action="acaoEditar.php" method="POST">
            <?php
            if (!$funcionario) echo "<h1>Funcionário não encontrado</h1>";
            else {
            ?>
                <div class="editarFuncionario">
                    <h1>Editar funcionário</h1>
                    <input type="hidden" placeholder="Digite o id" name="id" value="<?= $funcionario->id ?>" />
                    <input type="text" placeholder="Digite o primeiro nome" name="first_name" value="<?= $funcionario->first_name ?>" />
                    <input type="text" placeholder="Digite o sobrenome" name="last_name" value="<?= $funcionario->last_name ?>" />
                    <input type="text" placeholder="Digite o e-mail" name="email" value="<?= $funcionario->email ?>" />
                    <input type="text" placeholder="Digite o sexo" name="gender" value="<?= $funcionario->gender ?>" />
                    <input type="text" placeholder="Digite o IP" name="ip_address" value="<?= $funcionario->ip_address ?>" />
                    <input type="text" placeholder="Digite o país" name="country" value="<?= $funcionario->country ?>" />
                    <input type="text" placeholder="Digite o departamento" name="department" value="<?= $funcionario->department ?>" />
                    <button id="salvarEdicao">Salvar</button>
                </div>
            <?php } ?>
        </form>
    </div>
</body>

</html>
