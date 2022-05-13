<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 8 PHP</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
    <style>
        #entrada{margin-bottom: 20px; margin-top: 15px; margin-left: 10px; padding-bottom: 10px; padding-top: 10px}
    </style>
</head>
<body>
    <div class="titulo">
        <p><b>Atividade 8 - IF no PHP </b></p>
    </div>
    <form action="Atividade8.php "method="get">
        <label> Qual o seu salário? <input type="text" name="num1" id="entrada"></label><br>
        <input type="submit" value="Calcular meu reajuste salarial" id="enviar"><br><br>
    </form><br>
    <?php
            /* ~~ Inicializando as variáveis ~~ */
        $num1 = filter_input(INPUT_GET, "num1");
        $conta1 = ($num1 * 50)/100;
        $conta2 = ($num1 * 30)/100;

        function menos($conta1, $num1){ 
            $reajuste1 = $conta1 + $num1;
            return $reajuste1;
        }

        function mais($conta2, $num1){ 
            $reajuste2 = $conta2 + $num1;
            return $reajuste2;
        }
        
        if($num1 > 300){
            echo "Meu reajuste salarial é:  R$" . mais($conta2, $num1);
        }
        else{
            echo "Meu reajuste salarial é:  R$" . menos($conta1, $num1);
        }
    ?>
</body>
</html>