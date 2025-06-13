<? require_once "validador_acesso.php"?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>App Help Desk PHP</title>
    <style>
        .card-home{
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
            <div class="card-home">
                <div class="card">
                    <div class="card-header">
                        Menu
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="abrir_chamado.php"><img src="formulario_abrir_chamado.png" width="70" height="70"></a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="consultar_chamado.php"><img src="formulario_consultar_chamado.png" width="70" height="70"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>