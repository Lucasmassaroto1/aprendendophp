<?php
    session_start();
    /* $_SESSION['x'] = 'Ola, sou um valor de sessão!';
    print_r($_SESSION);
    echo '<hr>';
    echo$_SESSION['y'].'<br>'; */

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
    }else{
        $_SESSION['autenticado'] = 'não';
        header('Location: index.php?login=erro');
    }
    
    
    
    
    
    
    /* print_r($_GET);
    echo '<br>';
    echo $_GET['email'];
    echo '<br>';
    echo $_GET['senha']; */
    /* print_r($_POST);
    echo '<br>';
    echo $_POST['email'];
    echo '<br>';
    echo $_POST['senha']; */
?>