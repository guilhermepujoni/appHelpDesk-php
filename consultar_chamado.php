<?php 
    session_start();
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
        header('location: index.php?login=erro2');
    }
?>

<?php

    $chamados = array();

    //Abrindo o arquivo criado
    $arquivo = fopen('arquivo.hd', 'r');

    while(!feof($arquivo)) { //a feof() testa ate o fim do arquivo
        $registro = fgets($arquivo);// A funcao fgets() recupera os dados na linha
        $chamados[] = $registro;
    }
    //Fechandi arquivo
    fclose($arquivo);
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App HelpDesk</title>

    <link rel="stylesheet" href="./css/estilo_padrao.css">
    <link rel="stylesheet" href="./css/estiloconsultar_chamado.css">
</head>

<body>
    <?php 
        include("./estruturas_e_controle/header.php")
    ?>

    <main>
        <header> Consultar de Chamado </header>
        
        <section>
            <?php include('dados_chamadas_info.php') ?>

            <a href="home.php"><button  id="voltar"> Voltar </button></a>
        </section>    
    </main>
    
</body>

</html>