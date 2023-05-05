<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.   -->
    <title>Exercicio 6</title>
</head>
<body>
    <h2>Imprimindo o mês correspondente ao numero</h2>
    <form method="get">
        <label>Informe o numero do mês</label><br>
        <input type="number" name="num"><br>
        <br>
        <input type="submit" value="Gerar mês"><br>
        <br>
    </form>

    <?php
      $numMes = $_GET["num"];

      if($numMes == 1){
        echo "Janeiro";
      }else if($numMes == 2){
        echo "Fevereiro";
      }else if($numMes == 3){
        echo "Março";
      }else if($numMes == 4){
        echo "Abril";
      }else if($numMes == 5){
        echo "Maio";
      }else if($numMes == 6){
        echo "Junho";
      }else if($numMes == 7){
        echo "Julho";
      }else if($numMes == 8){
        echo "Agosto";
      }else if($numMes == 9){
        echo "Setembro";
      }else if($numMes == 10){
        echo "Outubro";
      }else if($numMes == 11){
        echo "Novembro";
      }else if($numMes == 12){
        echo "Dezembro";
      }else{
        echo "Numero invalido !!";
      }
    ?>
</body>
</html>