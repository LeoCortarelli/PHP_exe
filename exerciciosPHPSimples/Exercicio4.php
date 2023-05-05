<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: 
        Entrada = 4
        Saída = 4 X 0 = 0...4 X 10 = 40. -->
    <title>Exercicio 4</title>
</head>
<body>
    <form method="get">
        <label>Insira o numero</label><br>
        <input type="number" name="num"><br>
        <br>
        <input type="submit" value="Gerar tabuada"><br>
        <br>
    </form>
    <?php
        $num = $_GET["num"];

        $numInt = intval($num);

        for($i = 0; $i <= 10; $i++){
            $result = $numInt * $i;
            echo $numInt. " * ". $i. " = ". $result. "<br>";
        }
    ?>
</body>
</html>