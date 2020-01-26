<?php 
    session_start();

    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
        header('location: index.php?login=erro2');
    }

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App HelpDesk</title>

    <link rel="stylesheet" href="./css/estilo_padrao.css">
    <link rel="stylesheet" href="./css/estiloabrir_chamado.css">
</head>

<body>
    <?php
        include("./estruturas_e_controle/header.php")
    ?>

    
    <main>
        <header> Abertura de Chamado </header>
        
        <form method="post" action="registra_chamada.php">
            <p>Título</p>
            <input class="campos" type="text" name="titulo" id="titulo" placeholder="Título do Chamado">
            
            <p>Categoria</p>
                <select class="campos" name="categoria" id="categoria">
                    <option value="">Categoria</option>
                    <option value="impressora">Impressora</option>
                    <option value="hardware">Hardware</option>
                    <option value="software">Software</option>
                    <option value="rede">Rede</option>
                </select>  

            <p>Descrição</p>
            <textarea class="campos" name="descricao" id="descricao" placeholder="Descrição do Chamado"></textarea>

            <a href="home.php">
                <button id="voltar" class="botao">
                    Voltar 
                </button>
            </a>
            
            <input class="botao" type="submit" id="abrir" value="Abrir">  
        </form>    
    </main>
    
</body>

</html>