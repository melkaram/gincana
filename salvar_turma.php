<?php

$dados = json_decode(file_get_contents("dados.json"), true);

if(!$dados){
    $dados = [
        "turmas" => [],
        "jogos" => []
    ];
}

$turma = $_POST["turma"] ?? "";
$turma = trim($turma);

if($turma != "" && !in_array($turma, $dados["turmas"])){

    $dados["turmas"][] = $turma;

    file_put_contents("dados.json", json_encode($dados, JSON_PRETTY_PRINT));
}

header("Location:index.php");
exit;
?>