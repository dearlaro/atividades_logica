<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional e Laços de Repetição</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen"/>
</head>
<body>
    <!--Iniciando o código em HTML-->
    <div class="titulo">
        <p><b><u> Condicional e Laços de Repetição</p><br>
        <p id="sub">Palavra e suas repetições</small> </u></b></p>
    </div>
    <!-- Formulário -->
    <form action="Atividade6.php" method="post">
        <label>Entre com uma palavra: <input type="text" name="palavra" id="entrada"><br></label>
        <label>Entre com um número de repetições da palavra digitada: <input type="number" name="repete" id="entrada"><br></label>
        <input type="submit" value="enviar" id="enviar" name="enviar">
    </form><br>
    <?php
        /*If isset para não aparecer os echos sem que tenha algo preenchido*/
        if (isset($_POST['enviar'])){
        $palavra = $_POST['palavra'];
        $repete = $_POST['repete'];
            echo "A palavra escolhida foi: ". $palavra."<br><br><br>";
            /*Repetição das palavras*/
            echo str_repeat ($palavra." ",($repete));
        }
        
    ?>
</body>
</html>