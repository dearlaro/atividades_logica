<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3 PHP</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
</head>
<body>
    <div class="titulo">
        <p><b>Atividade 3 - IF no PHP </b></p>
    </div>
    <form action="Atividade3.php "method="get">
        <label>Insira um número: <input type="text" name="numero" id="numero"></label><br>
        <input type="submit" value="enviar" id="enviar">
    </form><br>
    <?php
        $numero = filter_input(INPUT_GET, "numero");
        if($numero>0){
            echo "O valor digitado é positivo";
        }
        elseif($numero<0) {
            echo "O valor digitado é negativo";
        }
        elseif($numero==0){
            echo "O valor digitado é igual a zero";
        }
    ?>
</body>
</html>