<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). 
        Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números.  -->
    <title>Exercicio 5</title>
</head>
<body>
    <form method="get">
        <h2>Calculadora Simples</h2><br>
        <label>Insira o primeiro numero</label><br>
        <input type="number" name="num1"><br>
        <br>
        <label>Insira o segundo numero</label><br>
        <input type="number" name="num2"><br>
        <br>
        <select name="opcao">
            <option selected>Escolha a operação</option>
            <option value="adcao">SOMA</option>
            <option value="subtracao">SUBTRAÇÃO</option>
            <option value="divisao">DIVISÃO</option>
            <option value="multiplicacao">MULTIPLICAÇÃO</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Calcular"><br>
        <br>
    </form>

    <?php

        $numero1 = $_GET["num1"];
        $numero2 = $_GET["num2"];
        $operacao = $_GET["opcao"];

        $numero1Int = intval($numero1);
        $numero2Int = intval($numero2);

        $result = " ";

        switch($operacao){
            case "adcao":
            $result = $numero1Int + $numero2Int;
            break;

            case "subtracao":
            $result = $numero1Int - $numero2Int;
            break;

            case "divisao":
            $result = $numero1Int / $numero2Int;
            break;

            case "multiplicacao":
            $result = $numero1Int * $numero2Int;
            break;
        }

        echo "O resultado é: ".$result;
    ?>
</body>
</html>