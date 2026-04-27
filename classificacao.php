<?php

$dados = json_decode(file_get_contents("dados.json"), true);

$turmas = ["9° ANO", "1° EM", "2° EM", "3° EM"];

$pontos = [];

foreach($turmas as $turma){
    $pontos[$turma] = 0;
}

foreach($dados["jogos"] as $jogo){

    $vencedor = $jogo["vencedor"];

    if(isset($pontos[$vencedor])){
        $pontos[$vencedor]++;
    }
}

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

<h1>🏆 Classificação</h1>

<table>

<tr>
<th>Turma</th>
<th>Pontos</th>
</tr>

<?php foreach($pontos as $turma => $pt){ ?>

<tr>
<td><?= $turma ?></td>
<td><?= $pt ?></td>
</tr>

<?php } ?>

</table>

<a href="index.php">Voltar</a>

</div>

</body>
</html>