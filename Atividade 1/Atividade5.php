<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5 PHP</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
    <style>
        #entrada{margin-bottom: 20px; margin-top: 15px; margin-left: 10px; padding-bottom: 10px; padding-top: 10px}
    </style>
</head>
<body>
    <div class="titulo">
        <p><b>Atividade 5 - IF no PHP </b></p>
    </div>
    <form action="Atividade5.php "method="get">
        <label> Insira o primeiro número:<input type="text" name="num1" id="entrada"></label><br>
        <label> Insira o segundo número:<input type="text" name="num2" id="entrada"></label><br>
        <input type="submit" value="Testar" id="enviar"><br><br>
    </form>
    <?php
        $num1 = filter_input(INPUT_GET, "num1");
        $num2 = filter_input(INPUT_GET, "num2");

        if($num1>$num2){
            echo "O número ".$num1 . " é maior que " . $num2;
        }
        elseif($num2>$num1){
            echo "O número ".$num2 . " é maior que " .$num1;
        }
    ?>
</body>
</html>