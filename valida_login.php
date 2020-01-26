<?php
    
    session_start();

    //Autenticação do usuário
    $user_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;


    $perfis = [1 => 'Administrativo', 2 => 'Usuário'];

    $usuarios_app = [
        ['id' => 1, 'email' => 'gpujoni@teste.com', 'senha' => '123456', 'perfil_id' => 1],
        ['id' => 2, 'email' => 'andrealpujoni@teste.com', 'senha' => '654321', 'perfil_id' => 2],
        ['id' => 3, 'email' => 'carlospujoni@teste.com', 'senha' => 'abcdef', 'perfil_id' => 2],
        ['id' => 4, 'email' => 'marciapujoni@teste.com', 'senha' => 'fedcba', 'perfil_id' => 2],
    ];

    $name_user = $_POST['name'];

    foreach($usuarios_app as $user) {

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ) {
            $user_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }
    
    if($user_autenticado) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['name'] = $name_user;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

?>