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
        <p id="sub">Desconto no produto</small> </u></b></p>
    </div>
    <!-- Formulário -->
    <form action="Atividade4.php" method="post">
        <label>Entre com um preço para receber 8% de desconto: <input type="number" name="preco1" id="entrada"><br></label>
        <label>Entre com outro preço para receber 11% de desconto: <input type="number" name="preco2" id="entrada"><br></label>
        <input type="submit" value="enviar" id="enviar" name="enviar">
    </form><br>
    <?php
        /*If isset para não aparecer os echos sem que tenha algo preenchido*/
        if (isset($_POST['enviar'])){
        $preco1 = $_POST['preco1'];
        $preco2 = $_POST['preco2'];
        /*Cálculo de porcentagem*/
        $desc1 = $preco1 - (($preco1 * 8)/100);
        $desc2 = $preco2 - (($preco2 * 11)/100);
            
        echo "O primeiro produto foi de R$" .$preco1. " para R$" .$desc1;
        echo " <br><br> E o segundo produto foi de R$" .$preco2. " para R$" .$desc2;
        }
        
    ?>
</body>
</html>