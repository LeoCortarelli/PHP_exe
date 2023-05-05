<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
     <!-- Faça um script que peça 3 notas de um aluno e mostra sua média. -->
    <title>Exercicio 2</title>
</head>
<body>
    <form method="get">
        <label>Digite a PRIMEIRA nota</label><br> <!-- Informando o usuario a digitar a primeira nota -->
        <input type="number" name="nota1">
        <br>
        <br>
        <label>Digite a SEGUNDA nota</label><br> <!-- Informando o usuario a digitar a segunda nota -->
        <input type="number" name="nota2"> 
        <br>
        <br>
        <label>Digite a TERCEIRA nota</label><br> <!-- Informando o usuario a digitar a terceira nota -->
        <input type="number" name="nota3">
        <br>
        <br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];

        $media = ($nota1 + $nota2 + $nota3) / 3;

        echo "A média das notas é: ", $media;
    ?>
</body>
</html>