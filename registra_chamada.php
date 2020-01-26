<?php 

    session_start();

    //Tratamento array $_POST, tirando a possibilidade de haver um "#", 
    //ao que atrapalharia a separação das informações
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
  
    //Inserindo as informações tratadas
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //Criando um novo arquivo, com "a" referente a apenas escrita
    $arquivo = fopen('arquivo.txt', 'a');

    //Inserido o texto dentro do arquivo criado
    fwrite($arquivo, $texto);
    //Fechamento do arquivo criado
    fclose($arquivo);
    
    
?>