<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4 PHP</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
    <style>
        #entrada{margin-bottom: 20px; margin-top: 15px; margin-left: 10px; padding-bottom: 10px; padding-top: 10px};
    </style>
</head>
<body style="text-align: center;">
    <div class="titulo">
        <p><b>Atividade 4 - IF no PHP </b></p>
    </div>
    <form action="Atividade4.php "method="get">
        <label> Insira o valor de A:<input type="text" name="valorA" id="entrada"></label><br>
        <label> Insira o valor de B:<input type="text" name="valorB" id="entrada"></label><br>
        <label> Insira o valor de C:<input type="text" name="valorC" id="entrada"></label><br>
        <label> Insira o valor de D:<input type="text" name="valorD" id="entrada"></label><br><br>
        <input type="submit" value="Calcular" style="padding-bottom: 10px; padding-top: 10px; padding-left:160px; padding-right: 160px;"><br><br>
    </form><br>
    <?php
            /* ~~ Inicializando as variáveis ~~ */
        $valorA = filter_input(INPUT_GET, "valorA");
        $valorB = filter_input(INPUT_GET, "valorB");
        $valorC = filter_input(INPUT_GET, "valorC");
        $valorD = filter_input(INPUT_GET, "valorD");
            /* ~~ Criando uma função ~~ */
        function somar ($valorA, $valorC){
            $resultAC = $valorA + $valorC;
            return $resultAC;
        }
        function multiplicar ($valorB, $valorD){
            $resultBD = $valorB * $valorD;
            return $resultBD;
        }
        echo ("O resultado da soma de A+C é: "), somar ($valorA, $valorC) . "<br>";
        echo ("O resultado da multiplicação de B*D é: "), multiplicar($valorB, $valorD) . "<br><br>";
    ?>
    <div class="titulo">
        <p><b>Ou seja</b></p>
    </div>
    <?php
            /* ~~ Contas ~~ */
        if(somar($valorA, $valorC) > multiplicar($valorB, $valorD)){
            echo "A+C é maior que B*D";
        }
        elseif(somar($valorA, $valorC) < multiplicar($valorB, $valorD)){
            echo "A+C é menor que B*D";
        }
        elseif(somar($valorA, $valorC) == multiplicar($valorB, $valorD)){
            echo "A+C é igual a B*D";
        }
    ?>
    <br><br>
</body>
</html>