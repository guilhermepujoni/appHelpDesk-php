<?php 
    session_start();

    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
        header('http://localhost/appHelpDesk/index.php?login=erro2');
    }

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App HelpDesk</title>

    <link rel="stylesheet" href="./css/estilo_padrao.css">
    <link rel="stylesheet" href="./css/estiloindex.css">
</head>

<body>
    
    <section id="conteiner">
        <img src="./img/oie_transparent.png" alt="">

        <form action="valida_login.php" method="post">

            <article>
                Nome:<input class="campos" type="text" name="name" id="name" placeholder="Digite seu Nome">
            </article>
            <article>
                E-mail:<input class="campos" type="email" name="email" id="email" placeholder="Digite seu E-mail">
            </article>

            <article>
                Senha:<input class="campos" type="password" name="senha" id="senha" placeholder="Digite seu Senha">
            </article>

                <!-- Erro de acesso, usuário ou senha pelo metodo $_GET-->
                <? if(isset($_GET['login']) && $_GET['login'] == 'erro' ) { ?>
                
                    <div class="text-danger" style="color: red">
                        Usuário ou senha inválido!
                    </div>

                <? } ?>

                <? if(isset($_GET['login']) && $_GET['login'] == 'erro2' ) { ?>
                
                    <div class="text-danger" style="color: red">
                        Faça login antes de acessar as outras páginas!
                    </div>

                <? } ?>

            <article>
                <input type="submit" id="submit" value="Entrar">
            </article>

            <article id="texto">
                <a href="">Esqueceu sua senha?</a>
            </article>


        </form>
    </section>
</body>

</html>