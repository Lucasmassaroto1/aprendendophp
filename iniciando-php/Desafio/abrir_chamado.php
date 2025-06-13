<? require_once "validador_acesso.php"?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>App Help Desk PHP</title>
    <style>
        .card-abrir-chamado{
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
            <div class="card-abrir-chamado">
                <div class="card">
                    <div class="card-header">
                        Abertura de chamado
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form method="POST" action="registra_chamado.php">
                                    <div class="form-group">
                                        <label>Título</label>
                                        <input type="text" class="form-control" name="titulo" placeholder="Título">
                                    </div>
                                    <div class="form-group">
                                        <label>Categoria</label>
                                        <select name="categoria" class="form-control">
                                            <option>Criação Usuário</option>
                                            <option>Impressora</option>
                                            <option>Hardware</option>
                                            <option>Software</option>
                                            <option>Rede</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <textarea class="form-control" name="descricao" rows="3"></textarea>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-lg btn-info btn-block">Abrir</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>