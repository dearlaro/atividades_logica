<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7 PHP</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
    <style>
        #entrada{margin-bottom: 20px; margin-top: 15px; margin-left: 10px; padding-bottom: 10px; padding-top: 10px}
        #sexo{margin-bottom: 20px; margin-top: 15px; margin-left: 10px; padding-bottom: 10px; padding-top: 10px; padding-left: 40px; padding-right: 40px;}
    </style>
</head>
<body>
    <div class="titulo">
        <p><b>Atividade 7 - IF no PHP </b></p>
    </div>
    <form action="Atividade7.php "method="get">
        <label> Qual a sua altura? <input type="text" name="num1" id="entrada"></label><br>
        <label> Identifique seu gênero: <select name="num2" id="sexo">
            <option value="fem">Feminino</option>
            <option value="masc">Masculino</option>
        </select></label><br><br>
        <input type="submit" value="Calcular peso ideal" id="enviar"><br><br>
    </form><br>
    <?php
            /* ~~ Inicializando as variáveis ~~ */
        $num1 = filter_input(INPUT_GET, "num1");
        $num2 = filter_var(["num2"]);
        $num2 = $_GET ["num2"];

            /* ~~ Criando funções ~~ */
        function calculoF($num1){
            $pesoF = (62.1 * $num1) - 44.7;
            return $pesoF;
        }
        function calculoM($num1){
            $pesoM = (72.7 * $num1) - 58;
            return $pesoM;
        }
            /* ~~ Usando switch case ~~ */
        switch($num2){
            case 'fem':
                echo "Seu peso ideal seria: " . calculoF($num1);
            break;
            case 'masc':
                echo "Seu peso ideal seria: " . calculoM($num1);
            break;
        }
    ?>
</body>
</html>