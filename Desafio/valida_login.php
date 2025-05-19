<?php
    session_start();
    // Variavel que verifica se a autenticacao foi realizada
    $usuario_autenticado = false;
    //usuarios do sistema
    $usuarios_app = [
        ['email' => 'adm@gmail.com', 'senha' => 'admnaarea'],
        ['email' => 'user@gmail.com', 'senha' => 'usernaarea'],
    ];
    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }
    if($usuario_autenticado){
        echo 'usuario autenticado';
        $_SESSION['autenticado'] = 'sim';
        $_SESSION['x'] = 'um valor';
        $_SESSION['y'] = 'outro valor';
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'não';
        header('Location: index.php?login=erro');
    }
?>