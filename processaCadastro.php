<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="w3.css">
    <title>Curriculo</title>
</head>
<body class="w3-blue w3-container w3-center">
    <h1>Brincos e Companhia</h1>
    <br>
    <h2>Curriculo do Candidato</h2>
<div class="w3-card w3-white w3-padding w3-round"
        style="max-width:600px; margin:auto;">
    <?php
    echo "Nome: ".$_POST['nome']."<br>";
    echo "Idade: ".$_POST['idade']."<br>";
    echo "Profissão: ".$_POST['profi']."<br>";
    echo "Salario: ".$_POST['sal']."<br>";
    echo "Experiencia anterior: ".$_POST['exp']."<br>";
    ?>
</div>
</body>
</html>
