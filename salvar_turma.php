<?php
 
$dados = json_decode(file_get_contents("dados.json"), true); //true transforma em array

if(!$dados){
    $dados = [
        "turmas" => [],
        "jogos" => []
    ];
}
$turma = $_POST["turma"] ?? ""; //essas aspas na linha 15 serve para informar o resultado dado pelo Form
$turma = trim($turma);

if($turma != "" && !in_array($turma, $dados["turmas"])){

    $dados["turmas"][] = $turma;

    file_put_contents("dados.json", json_encode($dados, JSON_PRETTY_PRINT)); //onde passa de array para json para salvar certinho 
}

header("Location:index.php");
exit; //para o código p nada ser rodado mais
?>