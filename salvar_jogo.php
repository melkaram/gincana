<?php

$dados = json_decode(file_get_contents("dados.json"), true);

if(!$dados){
    $dados = ["jogos" => []];
}

//aqui fica as respostas do form que o usuário colocou
$equipe1 = $_POST["equipe1"];
$equipe2 = $_POST["equipe2"];
$modalidade = $_POST["modalidade"];
$vencedor = $_POST["vencedor"];


//o sinal de igual no if mostra que a sala não pode jogar com a mesma. (fazer o teste)
if($equipe1 == $equipe2){
    header("Location:index.php");
    exit;
}

//cria um pacote com os dados
$jogo = [
    "equipe1" => $equipe1,
    "equipe2" => $equipe2,
    "modalidade" => $modalidade,
    "vencedor" => $vencedor
];

$dados["jogos"][] = $jogo; //coloca o jogo dentro do array

file_put_contents("dados.json", json_encode($dados, JSON_PRETTY_PRINT));

header("Location:index.php");
exit;
?>