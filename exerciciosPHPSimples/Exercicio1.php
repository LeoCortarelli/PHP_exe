<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo.
         Para saber o valor do pi, use: M_PI (ele armazena o valor de pi) -->
    <title>Exercicio 1</title>
</head>
<body>
    <form method = "get">
        <label>Digite o Raio</label><br>
        <input type="text" name="num"><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    $raio = $_GET['num'];

    //Calculo do perimetro
    $perimetro = 2 * M_PI * $raio;

    //Calculo da área
    $area = M_PI * $raio * $raio;

    echo "O perimetro é ", $perimetro,"<br>";
    echo "A área é ", $area;
    ?>
</body>
</html>