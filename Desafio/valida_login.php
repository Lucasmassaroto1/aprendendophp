<?php
    session_start();
    // Variavel que verifica se a autenticacao foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;
    $perfis = [1 => 'Admnistrativo', 2 => 'Usuário'];
    //usuarios do sistema
    $usuarios_app = [
        ['id' => 1, 'email' => 'adm@gmail.com', 'senha' => 'adm', 'perfil_id' => 1],
        ['id' => 2, 'email' => 'user@gmail.com', 'senha' => 'useradm', 'perfil_id' => 1],
        ['id' => 3, 'email' => 'lucas@gmail.com', 'senha' => 'user', 'perfil_id' => 2],
        ['id' => 4, 'email' => 'massaroto@gmail.com', 'senha' => 'user', 'perfil_id' => 2],
    ];
    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }
    if($usuario_autenticado){
        echo 'usuario autenticado';
        $_SESSION['autenticado'] = 'sim';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'não';
        header('Location: index.php?login=erro');
    }
?>