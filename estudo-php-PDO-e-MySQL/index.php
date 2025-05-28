<?php 
    
    if(!empty($_POST['usuario']) && !empty($_POST['senha'])){

        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';
    
        try{
            $conexao = new PDO($dsn, $usuario, $senha);
            /* 
            ==================BLOCO PARA CRIAR TABELA DE USUARIOS==================
            $query ='
                create table tb_usuarios(
                    id int not null primary key auto_increment,
                    nome varchar(50) not null,
                    email varchar(100) not null,
                    senha varchar(32) not null
                )
            ';
            $retorno = $conexao->exec($query); // retorna 0
            echo $retorno; 
            
            */

            $query = "select * from tb_usuarios where";
            $query .= " email = :usuario";
            $query .= " AND senha = :senha";
            
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':usuario', $_POST['usuario']);
            $stmt->bindValue(':senha', $_POST['senha']);
            $stmt->execute();
            $usuario = $stmt->fetch();

            print_r($usuario);

            /*
            ==================BLOCO PARA DEPURAÇÃO==================
            $stmt = $conexao->query($query);
            $lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            foreach($lista_usuarios as $key => $value){
                echo $value['nome'];
                echo '<hr>';
            }
            foreach($conexao->query($query) as $key => $value){
                echo $value['nome'];
                echo '<hr>';
            } */
    
        }catch(PDOException $e){
            echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="usuario" id="usuario" placeholder="Usuário"><br>
        <input type="password" name="senha" id="senha" placeholder="Senha"><br>
        <button type="submit">Logar</button>
    </form>
</body>
</html>