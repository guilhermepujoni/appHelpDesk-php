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

    <link rel="stylesheet" href="css/estilo_padrao.css"/>
    <link rel="stylesheet" href="css/estilohome.css"/>
</head>

<body>
    <?php 
        include("./estruturas_e_controle/header.php")
    ?>

    <main>
        <header> MENU </header>

        <div>
          <a href="abrir_chamado.php" id="secaoabrirchamado">
            <section>
              <article id="tituloabrirchamado">Escreva aqui a sua dúvida</article>
        
              <div>
                <img src="./img/formulario_abrir_chamado.png" alt="" srcset="">
              </div>
            </section>
          </a>

          <a href="consultar_chamado.php" id="secaoconsultarchamado">
            <section>
              <article id="tituloconsultarchamado">Consulte a sua dúvida</article>

              <div>
                <img src="./img/formulario_consultar_chamado.png" alt="" srcset="">
              </div>
            </section>
          </a>
        </div>
        
    </main>
    
</body>

</html>