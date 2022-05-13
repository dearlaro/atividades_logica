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
        <p id="sub">Tabuada</small> </u></b></p>
    </div>
    <!-- Formulário -->
    <form action="Atividade8.php" method="post">
        <label>Entre com um número para tabuada: <input type="number" name="numero" id="entrada"><br></label>
        <input type="submit" value="enviar" id="enviar" name="enviar">
    </form><br>
    <?php
        /*If isset para não aparecer os echos sem que tenha algo preenchido*/
        if (isset($_POST['enviar'])){
        $numero = $_POST['numero'];
        $tab = 0;
        if($numero==5){
            while($tab<=10){
                echo  $numero. " x " . $tab . " = " . ($tab * $numero) . "<br>";
                $tab++;
            }
        }
        else{
            while($tab<=10){
                if($tab == 5){
                    echo " ";
                    $tab++;
                }
                else{
                    echo  $numero. " x " . $tab . " = " . ($tab * $numero) . "<br>";
                    $tab++;
                }
            }
        }
    }     
    ?>
</body>
</html>