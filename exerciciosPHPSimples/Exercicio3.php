<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- Faça um script que peça a temperatura em graus Celsius, transforme e mostre a temperatura em graus Farenheit.
         C = (5 * (F-32) / 9). -->
    <title>Exercicio 3</title>
</head>
<body>
    <form method="get">
        <label>Digite a Temperatura</label><br>
        <input type="namber" name="temp">
        <br>
        <br>
        <label>Qual e a leitura da temperatura</label><br>
        <select name="opcao">
            <option selected>Qual a Temperatura</option>
            <option value="Celsius">Celsius</option>
            <option value="Farenheit">Farenheit</option>
        </select><br>
        <br>
        <input type="submit" value="Tranformar">
    </form>

    <?php
    $temp = $_GET["temp"];
    $opcao = $_GET["opcao"];

    $tempFloat = floatval($temp);
    $StrOpcao = strval($opcao);

    if ($StrOpcao == "Farenheit"){
        $trasnformCelsius = (5 * ($tempFloat - 32) / 9);
        echo "Os graus em Celsius é ", $trasnformCelsius;
    }else if($StrOpcao == "Celsius"){
        $trasnformFarenheit = ($tempFloat * 1.8) + 32;
        echo "Os graus em Farenheit é ", $trasnformFarenheit;
    }else{
        echo "Você não inseiu algun campo !!!";
    }
    ?>
</body>
</html>