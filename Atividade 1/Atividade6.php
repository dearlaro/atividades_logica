<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6 PHP</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
    <style>
        #entrada{margin-bottom: 20px; margin-top: 15px; margin-left: 10px; padding-bottom: 10px; padding-top: 10px}
    </style>
</head>
<body>
    <div class="titulo">
        <p><b>Atividade 6 - IF no PHP </b></p>
    </div>
    <form action="Atividade6.php "method="get">
        <label> Insira a primeira nota:<input type="text" name="num1" id="entrada"></label><br>
        <label> Insira a segunda nota:<input type="text" name="num2" id="entrada"></label><br>
        <label> Insira a terceira nota:<input type="text" name="num3" id="entrada"></label><br>
        <label> Insira a quarta nota:<input type="text" name="num4" id="entrada"></label><br>
        <input type="submit" value="Testar" id="enviar"><br><br>
    </form>
    <?php
            /* ~~ Inicializando as variáveis ~~ */
        $num1 = filter_input(INPUT_GET, "num1");
        $num2 = filter_input(INPUT_GET, "num2");
        $num3 = filter_input(INPUT_GET, "num3");
        $num4 = filter_input(INPUT_GET, "num4");
            /* ~~ Cálculo da média ~~ */
        $media = ($num1+$num2+$num3+$num4)/4;

        echo "A média do aluno é de: " . $media  . "<br><br>";
        
        if($media >= 7){
            echo "Parabéns, você foi aprovado! &#128512;";
        }
        else{
            echo "Infelizmente você não foi aprovado! &#128542;";
        }
    ?>
</body>
</html>