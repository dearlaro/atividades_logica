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
        <p id="sub">Escada de palavra</small> </u></b></p>
    </div>
    <!-- Formulário -->
    <form action="Atividade2.php" method="post">
        <label>Entre com uma palavra: <input type="text" name="palavra" id="entrada"><br></label>
        <input type="submit" value="enviar" id="enviar" name="enviar">
    </form><br>
    <?php
        /*If isset para não aparecer os echos sem que tenha algo preenchido*/
        if (isset($_POST['enviar'])){
        $palavra = $_POST['palavra'];
            ?>
            <!--css dentro do php-->
            <div style="text-align:left; margin-left:35%; font-size:20px; color:rgb(255, 166, 0);">
            <?php
            /*Repetição das palavras*/
            echo "Palavra: " . $palavra."<br>";
            echo str_repeat($palavra." ", 1)."<br>";
            echo str_repeat($palavra." ", 2)."<br>";
            echo str_repeat($palavra." ", 3)."<br>";
            echo str_repeat($palavra." ", 4);
            ?>
            </div>
            <?php
        }
        
    ?>
</body>
</html>