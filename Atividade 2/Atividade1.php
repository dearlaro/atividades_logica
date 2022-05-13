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
    <!-- Iniciando o código em html-->
    <div class="titulo">
        <p><b><u> Condicional e Laços de Repetição</p><br>
        <p id="sub">Quantos ano serão necessários para que a criança 2 seja maior que criança 1??</small> </u></b></p>
    </div>
    <!--Formulário-->
    <form action="Atividade1.php" method="post">
        <label>Entre com o nome da primeira criança: <input type="text" name=nome1 id="entrada"><br></label>
        <label>Entre com a altura da primeira criança: <input type="text" name=altura1 id="entrada"><br></label>
        <p id="lembrar">Lembrando que a primeira criança deverá ter a altura maior que a segunda!</p>
        <label>Entre com o nome da segunda criança: <input type="text" name=nome2 id="entrada"><br></label>
        <label>Entre com a altura da segunda criança: <input type="text" name=altura2 id="entrada"><br></label>
        <input type="submit" value="enviar" id="enviar" name="enviar">
    </form><br>
    <?php
        /* If isset para que não apareça mensagem caso nada esteja preenchido*/
        if (isset($_POST['enviar'])){
        $nome1 = $_POST['nome1'];
        $altura1 = $_POST['altura1'];
        $nome2 = $_POST['nome2'];
        $altura2 = $_POST['altura2'];
        $cont = 0;
        /* While para somar o total de anos */
            while($altura1>=$altura2){
                $cont++;
                $altura1 += 0.02;
                $altura2 += 0.03;
                
            }
        
        echo "São necessários ". $cont . " anos até que ". $nome2 ." seja maior que ". $nome1;
    }
        
    ?>
</body>
</html>