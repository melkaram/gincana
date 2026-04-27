<?php

$dados = json_decode(file_get_contents("dados.json"), true);

if(!$dados){
    $dados = ["jogos" => []];
}

$equipe1 = $_POST["equipe1"];
$equipe2 = $_POST["equipe2"];
$modalidade = $_POST["modalidade"];
$vencedor = $_POST["vencedor"];

if($equipe1 == $equipe2){
    header("Location:index.php");
    exit;
}

$jogo = [
    "equipe1" => $equipe1,
    "equipe2" => $equipe2,
    "modalidade" => $modalidade,
    "vencedor" => $vencedor
];

$dados["jogos"][] = $jogo;

file_put_contents("dados.json", json_encode($dados, JSON_PRETTY_PRINT));

header("Location:index.php");
exit;
?>