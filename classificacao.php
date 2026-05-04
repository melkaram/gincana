<?php

$dados = json_decode(file_get_contents("dados.json"), true);

//quando não existe dados ainda
if(!$dados){
    $dados = ["jogos" => []];
}

$turmas = ["9° ANO", "1° EM", "2° EM", "3° EM"];

$pontos = [];


foreach($turmas as $turma){
    $pontos[$turma] = 0;
}

//parte que soma os pontos
if(isset($dados["jogos"])){

    foreach($dados["jogos"] as $jogo){

        $vencedor = trim($jogo["vencedor"] ?? "");

        if(isset($pontos[$vencedor])){
            $pontos[$vencedor]++;
        }
    }
}

//deixa em ordem de liderança que nem o sor Jonatan pediu
arsort($pontos);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Classificação</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Classificação</h1>

 <!-- criação da tabela -->
<table border="1">
<tr>
<th>Turma</th>
<th>Pontos</th>
</tr>

<?php foreach($pontos as $turma => $pt){ ?>

<!-- cria uma linha p cada turma -->
<tr>
<td><?= $turma ?></td>
<td><?= $pt ?></td>
</tr>

<?php } ?>

</table>

<br>
<a href="index.php">Voltar</a>

</div>

</body>
</html>