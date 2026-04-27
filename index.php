<?php
$turmas = ["9° ANO", "1° EM", "2° EM", "3° EM"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Gincana Esportiva SENAI</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Gincana Esportiva SENAI</h1>

<h2>Registrar Jogo</h2>

<form action="salvar_jogo.php" method="POST">

<select name="equipe1" required>
<option value="">Equipe 1</option>
<?php foreach($turmas as $turma){ ?>
<option value="<?= $turma ?>"><?= $turma ?></option>
<?php } ?>
</select>

<select name="equipe2" required>
<option value="">Equipe 2</option>
<?php foreach($turmas as $turma){ ?>
<option value="<?= $turma ?>"><?= $turma ?></option>
<?php } ?>
</select>

<input type="text" name="modalidade" placeholder="Modalidade" required>

<select name="vencedor" required>
<option value="">Vencedor</option>
<?php foreach($turmas as $turma){ ?>
<option value="<?= $turma ?>"><?= $turma ?></option>
<?php } ?>
</select>

<button type="submit">Salvar Resultado</button>

</form>

<a href="classificacao.php">Ver Classificação</a>

</div>

</body>
</html>