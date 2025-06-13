<? require_once "validador_acesso.php"?>
<?php 
    // Chamados
    $chamados = [];
    // Abrir o arquivo.txt
    $arquivo = fopen('app_help_desk/arquivo.txt', 'r');
    // Enquanto Houver Registros || Linhas a serem recuperados
    while(!feof($arquivo)){ // testa pelo fim de um arquivo
        //linhas 
        $registro = fgets($arquivo);
        //explode dos detalhes do registro para verificar o id do usuário responsável pelo cadastro
        $registro_detalhes = explode('#', $registro);
        //(perfil id = 2) só vamos exibir o chamado, se ele foi criado pelo usuário
        if($_SESSION['perfil_id'] == 2){
           //se usuário autenticado não for o usuário de abertura do chamado então não faz nada
            if($_SESSION['id'] != $registro_detalhes[0]){
                continue;
            }else{
                $chamados[] = $registro; //adiciona o registro do arquivo ao array $chamados
            }
        }else{
            $chamados[] = $registro; //adiciona o registro do arquivo ao array $chamados
        }
    }
    // Fechar o arquivo aberto
    fclose($arquivo);
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>App Help Desk PHP</title>
    <style>
        .card-consultar-chamado{
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="#" class="navbar-brand">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top">
            App Help Desk
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="logoff.php" class="nav-link">SAIR</a>
            </li>    
        </ul>
    </nav>
    <div class="container">
        <div class="row">
            <div class="card-consultar-chamado">
                <div class="card">
                    <div class="card-header">
                        Consultar Chamado
                    </div>
                    <div class="card-body">
                        <? foreach($chamados as $chamado){ ?>
                        <?php
                            $chamado_dados = explode('#', $chamado);
                            if(count($chamado_dados) < 3){
                                continue;
                            }
                        ?>
                        <div class="card mb-3 bg-light">
                            <div class="card-body">
                                <h5 class="card-title"><?= $chamado_dados[1]?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2]?></h6>
                                <p class="card-text"><?= $chamado_dados[3]?></p>
                            </div>
                        </div>
                        <?}?>
                        <div class="row mt-5">
                            <div class="col-6">
                                <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>