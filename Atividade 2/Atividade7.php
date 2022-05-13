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
        <p id="sub">Soma de números positivos e negativos</small> </u></b></p>
    </div>
    <!-- Formulário -->
    <form action="Atividade7.php" method="post">
        <?php
        /*If isset para não aparecer os echos sem que tenha algo preenchido*/
        if (isset($_POST['enviar'])){
        /*Repetição*/
            while ($i=0; $i <= 10; $i++){
        ?>
            <label>Entre com um número: <input type="number" name="numero" id="entrada"><br></label>
            <input type="submit" value="Enviar o número" id="enviar" name="enviar">
    </form><br>
            <?php 
                $numero = $_POST['numero'];
                $soma1 = 0;
                $soma2= 0;
                echo "Seus números foram: ".$numero;
                    if($numero>0){
                        $soma1 = $soma1 + $numero;
                        return $soma1;
                    }
                    else{
                        $soma2 = $soma2 + $numero;
                        return $soma2;
                    }
        }
        }
        
    
    ?>
</body>
</html>