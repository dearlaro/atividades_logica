<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 PHP</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen"/>
</head>
<body>
    <div class="titulo">
        <p><b>Atividade 1 - IF no PHP </b></p>
    </div>
    <form action="Atividade1.php "method="get">
        <label>Insira um número: <input type="text" name="numero" id="numero"><br></label>
        <input type="submit" value="enviar" id="enviar">
    </form><br>
    <?php
        $numero = filter_input(INPUT_GET, "numero");
        if($numero>10){
            echo "O valor digitado é maior que 10";
        }
        elseif($numero<10) {
            echo "O valor digitado é menor que 10";
        }
        elseif($numero==10){
            echo "O valor digitado é igual a 10";
        }
    ?>
</body>
</html>