<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- Solicite a entrada de um número e descubra se um número digitado é par ou ímpar.   -->
    <title>Exercicio 6</title>
</head>
<body>
    <h2>Descubra se o numero e PAR ou IMPAR</h2>
    <form method="get">
        <label>Digite um numero</label><br>
        <input type="number" name="num"><br>
        <br>
        <input type="submit" value="Calcular"><br>
        <br>
    </form>

    <?php
        $num = $_GET["num"];
        $numInt = intval($num);

        if($numInt %2 == 0){
            echo "PAR";
        }else{
            echo "IMPAR";
        }
    ?>
</body>
</html>