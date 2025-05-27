<?php 
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try{
        $conexao = new PDO($dsn, $usuario, $senha);
        /* $query ='
            create table if not exists tb_usuarios(
                id int not null primary key auto_increment,
                nome varchar(50) not null,
                email varchar(100) not null,
                senha varchar(32) not null
            )
        ';
        $retorno = $conexao->exec($query); // retorna 0
        echo $retorno; */
        
        /* $query ='
            insert into tb_usuarios(
                nome, email, senha 
            )values("Lucas Massaroto", "lucasmassarotodev@gmail.com", "123");
        ';
        $retorno = $conexao->exec($query);
        echo $retorno; */

        $query ='
            select * from tb_usuarios
        ';

        $stmt = $conexao->query($query);
        $lista = $stmt->fetchAll();

        print_r($lista);
        
    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
    }



?>