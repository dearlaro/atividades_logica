<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional e Laços de Repetição</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
    <style>
        #sexo{margin-bottom: 15px; margin-top: 15px; margin-left: 5px; padding-bottom: 10px; padding-top: 10px; padding-left: 70px; padding-right: 70px;}    </style>
</head>
<body>
    <!-- Iniciando o código em HTMl -->
    <div class="titulo">
        <p><b><u> Condicional e Laços de Repetição</p><br>
        <p id="sub">Alistamento militar</small> </u></b></p>
    </div>
    <!-- Formulário -->
    <form action="Atividade3.php "method="post">
        <label> Qual o seu nome? <input type="text" name="nome" id="entrada"></label><br>
        <label id="genero"> Identifique seu gênero: <select name="sexo" id="sexo">
            <option value="select">Selecione</option>
            <option value="fem">Feminino</option>
            <option value="masc">Masculino</option>
        </select></label><br><br>
        <label> Qual a sua idade? <input type="text" name="idade" id="entrada"></label><br>
        <input type="submit" value="Posso me alistar?" name="enviar" id="enviar"><br><br>
    </form><br>
    <?php
            /* ~~ Inicializando as variáveis ~~ */
        if (isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = filter_var(["sexo"]);
        $sexo = $_POST ["sexo"];

                /* ~~ Usando if e else ~~ */
            if($idade >= 18 && $sexo == 'masc'){
                echo $nome. ", você já pode realizar o seu alistamento militar!!";
            }
            elseif($idade < 18 && $sexo == 'masc'){
                echo $nome. ", você só pode ser alistar quando completar 18 anos";
            }
            else{
                echo $nome.", você não pode se alistar";
            }
    }
    ?>
</body>
</html>