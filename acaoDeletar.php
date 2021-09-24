<?php

require("./funcoes.php");

$idFuncionario = $_GET["id"];

deletarFuncionario("./empresaX.json", $idFuncionario);

header("location: empresax.php");