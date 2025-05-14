<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
</head>
<body>
    <!-- _____________AULA 1 EMBUTINDO BLOCOS PHP EM PÁGINAS HTML _____________ -->
    <!--  <?php
        echo "Usando Tag Padrão"; 
    ?> CONCLUIDO
    <br><hr>
    <?= 'Usando Tag de Impressão' ?> -->
    <!-- _____________AULA 2 HABILITANDO E TESTANDO TAGS CURTAS (SHORTS_OPEN_TAG)_____________ -->
    <!-- <br><hr>
    <? echo 'Usando Tag Curta' ?> CONCLUIDO
    <br><hr> -->
    <!-- _____________AULA 3 SAÍDA DE DADOS COM ECHO() E PRINT()_____________ -->
    <!--    <?php 
        echo 'Comando ECHO <br>';
        print 'Comando PRINT <hr>';
        echo print("Comando print");
    ?> CONCLUIDO 
    --> 
    <!-- _____________AULA 4 FUNCIONAMENTO DO PHP UM POUCO MAIS A FUNDO (PÁGINAS ESTÁTICAS X DINÂMICAS)_____________ -->
    <!-- CONCLUIDO -->
    <!-- _____________AULA 5 COMENTÁRIOS_____________ -->
    <!-- ATUALIZEI ARQUIVO COMENTARIOS.PHP -->
    <!-- <?php 
        // Comentário de uma linha
        echo 'Testando Comentário de Uma Linha';
        # Comentário de uma linha
        echo 'Testando Comentário de Uma Linha Estilo Shell';
        /* Comentário de Multiplas linhas.
            Este tipo de comentário permite que varias
            linhas sejam Ignoradas ao mesmo tempo
        */
        echo 'Testando Comentário de Multiplas Linhas';
    ?> -->
    <!-- _____________AULA 6 VARIÁVEIS - INTRODUÇÃO_____________ -->
    <!-- CONCLUIDO -->
    <!-- _____________AULA 7 VARIÁVEIS - PRÁTICA (STRING, INT, FLOAT, E BOOLEAN)_____________ -->
    <!-- <?php 
        // String
        $nome = 'Lucas Massaroto';
        // Int
        $idade = 18;
        // Float
        $peso = 84.5;
        // Boolean
        $fumante_sn = false;
    ?>
    <h1>Ficha Cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p> -->
    <!-- _____________AULA 8 ALTERANDO VALORES DE VARIÁVEIS_____________ -->
    <!--  <?php 
        // String
        $nome = 'Lucas Massaroto';
        // Int
        $idade = 17;
        // Float
        $peso = 84.5;
        // Boolean
        $fumante_sn = false;
        // Lógica
        $idade = 18;
    ?>
    <h1>Ficha Cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p> -->
    <!-- _____________AULA 9 CONCATENAÇÃO_____________ -->
    <!-- <?php 
        $nome = 'Lucas';
        $corfav = 'Azul';
        $idade = 18;
        $gosto = 'Jogar Elden Ring';
        // Para concatenar utiliza Operador .
        echo 'Olá '.$nome.', vi que sua cor favorita é '.$corfav.', estou vendo também que você possui '. $idade.' anos e que gosta de '.$gosto;
        // Aspas Duplas
        echo '<br>';
        echo "Olá $nome vi que sua cor favorita é $corfav, estou vendo também que você possui $idade anos e que gosta de $gosto.";
        // Aspas Simples
        echo '<br>';
        echo 'Olá $nome vi que sua cor favorita é $corfav, estou vendo também que você possui $idade anos e que gosta de $gosto.';
    ?> -->
    <!-- _____________AULA 10 VARIÁVEIS CONSTANTES_____________ -->
    <!-- <?php 
        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'usuario_dev');
        define('BD_SENHA', 'senha_dev');

        echo BD_URL.'<br>';
        echo BD_USUARIO.'<br>';
        echo BD_SENHA.'<br>';
    ?> -->
    <!-- _____________AULA 11 IF/ELSE PARTE 1 - INTRODUÇÃO_____________ -->
    <!-- Concluido -->
    <!-- _____________AULA 12 OPERADORES DE COMPARAÇÃO (CONDICIONAIS)_____________ -->
    <!-- Concluido -->
    <!-- _____________AULA 12+1 IF/ELSE PARTE 2 - PRATICANDO COM OPERADORES DE COMPARAÇÃO_______ -->
    <!-- <?php
        // ==
        // ===
        // != || <>
        // !==
        // <
        // >
        // <=
        // >=
        if(3 >= 2){
            echo"Verdade";
        }else{
            echo"Isso é FALSOOOOOO";
        }
    ?> -->
    <!-- _____________AULA 14 OPERADORES LÓGICOS_____________ -->
        <!-- Concluido -->
    <!-- _____________AULA 15 IF/ELSE PARTE 3 - PRATICANDO COM OPERADORES LÓGICOS_____________ -->

    <!-- _____________AULA 16 IF/ELSE PARTE 4 - PRATICANDO UM POUCO MAIS_____________ -->

    <!-- _____________AULA 17 IF/ELSE PARTE 5 - CONDIÇÕES ENCADEADAS_____________ -->

    <!-- _____________AULA 18 OPERADORES TERNÁRIOS_____________ -->

    <!-- _____________AULA 19 SWITCH_____________ -->
    
    <!-- _____________AULA 20 SWITCH NA PRÁTICA_____________ -->
    
    <!-- _____________AULA 21 CASTING DE TIPOS COM (INT), (BOOL), (FLOAT), (STRING)_____________ -->
    
    <!-- _____________AULA 22 OPERADORES ARITMÉTICOS_____________ -->
    
    <!-- _____________AULA 23 PRATICANDO COM OPERADORES ARITMÉTICOS_____________ -->
    
    <!-- _____________AULA 24 OPERAÇÕES ARITMÉTICAS NA ATRIBUIÇÃO DE VALORES_____________ -->
    
    <!-- _____________AULA 25 OPERADORES DE INCREMENTO/DECREMENTO_____________ -->
    
    <!-- _____________AULA 26 PRATICANDO COM OPERADORES DE INCREMENTO/DECREMENTO_____________ -->
    
    <!-- _____________AULA 27 FUNÇÕES - INTRODUÇÃO_____________ -->
    
    <!-- _____________AULA 28 FUNÇÕES - PRÁTICA_____________ -->
    
    <!-- _____________AULA 29 FUNÇÕES NATIVAS PARA MANIPULAR STRINGS_____________ -->
    
    <!-- _____________AULA 30 FUNÇÕES NATIVAS PARA TAREFAS MATEMATICAS_____________ -->
    
    <!-- _____________AULA 31 FUNÇÕES NATIVAS PARA MANIPULAR DATAS_____________ -->
    
    <!-- _____________AULA 32 ARRAY BÁSICO - INTRODUÇÃO_____________ -->
    
    <!-- _____________AULA 33 ARRAY BÁSICO - PRÁTICA_____________ -->
    
    <!-- _____________AULA 34 ARRAY MULTIDIMENSIONAL_____________ -->
    
    <!-- _____________AULA 35 ARRAY - MÉTODOS DE PESQUISA_____________ -->
    
    <!-- _____________AULA 36 EXTRA - FALSE, NULL E EMPTY_____________ -->
    
    <!-- _____________AULA 37 FUNÇÕES NATIVAS PARA MANIPULAR ARRAYS_____________ -->
    
    <!-- _____________AULA 38 LOOPS PARTE 1 - INTRODUÇÃO_____________ -->
    
    <!-- _____________AULA 39 LOOPS PARTE 2 - WHILE_____________ -->
    
    <!-- _____________AULA 40 LOOPS PARTE 3 - DO WHILE_____________ -->
    
    <!-- _____________AULA 41 LOOPS PARTE 4 - FOR_____________ -->
    
    <!-- _____________AULA 42 PRATICANDO UM POUCO - PERCORRENDO ARRAYS COM WHILE, DO WHILE E FOR_____________ -->
    
    <!-- _____________AULA 43 LOOPS PARTE 5 - FOREACH_____________ -->
    
    <!-- _____________AULA 44 PRATICANDO UM POUCO - FOREACH EM ARRAYS ASSOCIATIVOS E FOEACH ENCADEADOS_____________ -->
    
    <!-- _____________AULA 45 APP HELP DASK - INSTRUÇÕES GERAIS_____________ -->
    
    <!-- _____________AULA 46 APP HELP DASK - INTRODUÇÃO_____________ -->
    
    <!-- _____________AULA 47 APP HELP DASK - INICIANDO PROJETO_____________ -->
    
    <!-- _____________AULA 48 APP HELP DASK - FORMULÁRIOS (DESENVOLVENDO OS METODOS GET E POST)_____________ -->
    
    <!-- _____________AULA 49 APP HELP DASK - AUTENTICANDO USUÁRIO_____________ -->
    
    <!-- _____________AULA 50 APP HELP DASK - PROTEGENDO PÁGINA RESTRITAS COM SESSION_____________ -->
    
    <!-- _____________AULA 51 INCORPORANDO SCRIPTS COM INCLUDE, INCLUDE_ONCE, REQUIRE E REQUIRE_ONCE_____________ -->
    
    <!-- _____________AULA 52 APP HELP DASK - REFACTORING DO PROJETO COM REQUIRE_ONCE_____________ -->
    
    <!-- _____________AULA 53 APP HELP DASK - NAVEGAÇÃO ENTRE PÁGINAS_____________ -->
    
    <!-- _____________AULA 54 APP HELP DASK - ENCERRANDO SESSÃO (LOGOFF)_____________ -->
    
    <!-- _____________AULA 55 APP HELP DASK - REGISTRANDO CHAMADOS_____________ -->
    
    <!-- _____________AULA 56 APP HELP DASK - CONSULTANDO CHAMADOS_____________ -->
    
    <!-- _____________AULA 57 APP HELP DASK - APLICANDO CONTROLE DE PERFIL DE USUÁRIO_____________ -->
    
    <!-- _____________AULA 58 APP HELP DASK - SEGURANÇA NO BACK-END DE APLICAÇÕES WEB_____________ -->
    

</body>
</html>