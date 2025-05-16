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
    <!--  <?php 
        // ==
        // ===
        // != || <>
        // !==
        // <
        // >
        // <=
        // >=

        // Operadores Lógicos
        // E: && ou AND -> retorna verdadeiro se todos os resultados das expressões forem verdadeiro
        // OU: || ou OR -> retorna verdadeiro se pelo menos um dos resultados das expressões forem verdadeiro
        // XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeiro && a outra for falsa || vice-versa
        // ! -> Inverte os resultados das expressões
        // () Estabelecer Precedência
        // (V && V) = V || F = V
        if((22 == 22 && 3 == 3 ) || 5 != 5){
            echo"Verdade";
        }else{
            echo"Isso é FALSOOOOOO";
        }
    ?> -->
    <!-- _____________AULA 16 IF/ELSE PARTE 4 - PRATICANDO UM POUCO MAIS_____________ -->
        <!-- <?php 
            // 
            $usuario_possui_cartao_loja = true;
            $valor_compra = 225;
            $valor_frete = 150;
            $recebeu_desconto_frete = false;

            if($usuario_possui_cartao_loja || $valor_compra >= 100){
                $valor_frete = 0;
                $recebeu_desconto_frete = true;
            }
            ?>
            <h1>Detalhes do pedido</h1>
            <p>Possui Cartão da Loja?
                <?php 
                    if($usuario_possui_cartao_loja){
                        echo 'Sim';
                    }else{
                        echo 'Não';
                    }
                ?>
            </p>
            <p>Valor da compra: <?= $valor_compra?></p>
            <p>Recebeu desconto no frete?
                <?php 
                    if($recebeu_desconto_frete){
                        echo 'Sim';
                    }else{
                        echo 'Não';
                    }
                ?>
            </p>
            <p>Valor do frete: <?= $valor_frete?></p> -->
    <!-- _____________AULA 17 IF/ELSE PARTE 5 - CONDIÇÕES ENCADEADAS_____________ -->
        <!-- <?php 
            // 
            $usuario_possui_cartao_loja = true;
            $valor_compra = 450;
            $valor_frete = 150;
            $recebeu_desconto_frete = true;

            if($usuario_possui_cartao_loja && $valor_compra >= 400){
                $valor_frete = 0;
            }else if($usuario_possui_cartao_loja && $valor_compra >= 300){
                $valor_frete = 10;
            }else if($usuario_possui_cartao_loja && $valor_compra >= 100){
                $valor_frete = 25;
            }else{
                $recebeu_desconto_frete = false;
            }
            ?>
            <h1>Detalhes do pedido</h1>
            <p>Possui Cartão da Loja?
                <?php 
                    if($usuario_possui_cartao_loja){
                        echo 'Sim';
                    }else{
                        echo 'Não';
                    }
                ?>
            </p>
            <p>Valor da compra: <?= $valor_compra?></p>
            <p>Recebeu desconto no frete?
                <?php 
                    if($recebeu_desconto_frete){
                        echo 'Sim';
                    }else{
                        echo 'Não';
                    }
                ?>
            </p>
            <p>Valor do frete: <?= $valor_frete?></p> -->
    <!-- _____________AULA 18 OPERADORES TERNÁRIOS_____________ -->
    <!-- <?php 
            $usuario_possui_cartao_loja = true;
            $valor_compra = 450;
            $valor_frete = 150;
            $recebeu_desconto_frete = true;
            
            $valor_frete_aux = $usuario_possui_cartao_loja && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja && $valor_compra >= 300 ? 10 : ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete));
            $recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;
            $valor_frete = $valor_frete_aux;
            
            /* if($usuario_possui_cartao_loja && $valor_compra >= 400){
                $valor_frete = 0;
            }else if($usuario_possui_cartao_loja && $valor_compra >= 300){
                $valor_frete = 10;
            }else if($usuario_possui_cartao_loja && $valor_compra >= 100){
                $valor_frete = 25;
            }else{
                $recebeu_desconto_frete = false;
            } */
            ?>
            <h1>Detalhes do pedido</h1>
            <p>Possui Cartão da Loja? <?= $usuario_possui_cartao_loja ? 'Sim' : 'Não'?></p>
            <p>Valor da compra: <?= $valor_compra?></p>
            <p>Recebeu desconto no frete?
                <?=$recebeu_desconto_frete ? 'Sim' : 'Não'?>
            </p>
            <p>Valor do frete: <?= $valor_frete?></p> -->
    <!-- _____________AULA 19 SWITCH_____________ -->
    <!-- <?php 
        $opcao = 2;

        switch($opcao){
            case 1:
                // Codigo Aqui
                break;
            case 2:
                // Codigo Aqui
                break;
            default:
                // Codigo Aqui
                break;
        }
    ?> -->
    <!-- _____________AULA 20 SWITCH NA PRÁTICA_____________ -->
    <!--  <?php 
        $parametro = 1;
        switch($parametro){
            case 1:
                echo 'Entrou no case 1';
                break;
            case 2:
                echo 'Entrou no case 2';
                break;
            case 3:
                echo 'Entrou no case 3';
                break;
            default:
                echo 'Entrou no default';
                break;
        }
    ?> -->
    <!-- _____________AULA 21 CASTING DE TIPOS COM (INT), (BOOL), (FLOAT), (STRING)_____________ -->
    <!-- <?php 
        //gettype() => tipo da variavel
        $valor = false;
        //$valor2 = (float) $valor; // float || double
        //$valor2 = (int) $valor; // int || integer
        //$valor2 = (string) $valor;
        //$valor2 = (boolean) $valor; // int || float || boolean, bool
        $valor2 = (string) $valor; // int || string
        $valor3 = (int) $valor2; // int || string


        echo $valor.' '.gettype($valor);
        echo '<br>';
        echo $valor2.' '.gettype($valor2);
        echo '<br>';
        echo $valor3.' '.gettype($valor3);
    ?> -->
    <!-- _____________AULA 22 OPERADORES ARITMÉTICOS_____________ -->
    <!-- Concluida -->
    <!-- _____________AULA 23 PRATICANDO COM OPERADORES ARITMÉTICOS_____________ -->
    <!-- <?php 
        $num1 = 13;
        $num2 = 4;
        echo "A soma entre $num1 e $num2 é ".($num1 + $num2);
        echo '<br>';
        echo "A subtração entre $num1 e $num2 é ".($num1 - $num2);
        echo '<br>';
        echo "A multiplicação entre $num1 e $num2 é ".($num1 * $num2);
        echo '<br>';
        echo "A divisão entre $num1 e $num2 é ".($num1 / $num2);
        echo '<br>';
        echo "O modulo entre $num1 e $num2 é ".($num1 % $num2);
    ?> -->
    <!-- _____________AULA 24 OPERAÇÕES ARITMÉTICAS NA ATRIBUIÇÃO DE VALORES_____________ -->
    <!-- <?php 
        $x = 10;
        $y = 8;

        $x %= $y;

        echo $x;
    ?> -->
    <!-- _____________AULA 25 OPERADORES DE INCREMENTO/DECREMENTO_____________ -->
    <!-- Concluido -->
    <!-- _____________AULA 26 PRATICANDO COM OPERADORES DE INCREMENTO/DECREMENTO_____________ -->
        <!-- <h3>Pós-Incremento</h3>
        <?php 
            $x = 7;

            echo "O Valor contido em X é $x <br>";
            echo 'O Valor contido em X Pós-Incremento é '.$x++. ' <br>';
            echo 'O Valor atualizado Pós-Incremento é '.$x;      
        ?>
        <h3>Pré-Incremento</h3>
        <?php
            echo "O Valor contido em X é $x <br>";
            echo 'O Valor contido em X Pré-Incremento é '.++$x. ' <br>';
            echo 'O Valor atualizado o Pré-Incremento é '.$x;
        ?>
        <h3>Pós-Incremento</h3>
        <?php
            echo "O Valor contido em X é $x <br>";
            echo 'O Valor contido em X Pós-Decremento é '.$x--. ' <br>';
            echo 'O Valor atualizado Pós-Decremento é '.$x;
        ?>
        <h3>Pré-Decremento</h3>
        <?php
            echo "O Valor contido em X é $x <br>";
            echo 'O Valor contido em X Pré-Decremento é '.--$x. ' <br>';
            echo 'O Valor atualizado o Pré-Decremento é '.$x;
        ?> -->
    <!-- _____________AULA 27 FUNÇÕES - INTRODUÇÃO_____________ -->
    <!-- Concluido -->
    <!-- _____________AULA 28 FUNÇÕES - PRÁTICA_____________ -->
    <!--  <?php 
        function exibirBoasVindas(){
            // FUNÇÃO VOID(Sem retorno)
            echo 'Bem-vindo ao PHP<br>';
        }
        exibirBoasVindas();

        function calcularAreaTerreno($largura, $comprimento){
            // return(Com retorno)
            $area = $largura * $comprimento;
            return $area;
        }
        $res = calcularAreaTerreno(5, 25);
        echo $res;
    ?> -->
    <!-- _____________AULA 29 FUNÇÕES NATIVAS PARA MANIPULAR STRINGS_____________ -->
    <!-- <?php 
        $texto = 'Estudando Programação PHP';
        //String To Lower
        echo $texto. '<br>';
        echo strtolower($texto). '<br>';
        echo '<hr>';
        //String To Upper
        echo $texto. '<br>';
        echo strtoupper($texto). '<br>';
        echo '<hr>';
        //upper case first
        echo $texto. '<br>';
        echo ucfirst($texto). '<br>';
        echo '<hr>';
        //string length
        echo $texto. '<br>';
        echo strlen($texto). '<br>';
        echo '<hr>';
        //string replace
        echo $texto. '<br>';
        echo str_replace('PHP', 'Linguagem De Programação PHP', $texto). '<br>';
        echo '<hr>';
        //string replace
        echo $texto. '<br>';
        //'Estudando PHP'
        echo substr($texto, '1', 8). '<br>';
        echo '<hr>';
    ?> -->
    <!-- _____________AULA 30 FUNÇÕES NATIVAS PARA TAREFAS MATEMATICAS_____________ -->
    <!-- <?php 
        $numero = 7.3;
        echo ceil($numero); // Aredonda para cima
        echo '<br>';
        echo floor($numero); // Arredonda para baixo
        echo '<br>';
        echo round($numero); // Arredonda com base na fração
        echo '<br>';
        echo rand(); // Gera um inteiro aleatorio
        echo '<br>'.getrandmax();
        echo '<br>';
        echo sqrt($numero); // Retorna Raiz Quadrada
    ?> -->
    <!-- _____________AULA 31 FUNÇÕES NATIVAS PARA MANIPULAR DATAS_____________ -->
    <!-- <?php 
    /* // Recuperação da data atual / datas corrente
    echo date('d/m/y'); // d/m/y
    echo '<br>';
    echo date('d/m/Y'); // d/m/Y
    echo '<br>';
    echo date('D/M/Y'); // D/M/Y
    echo '<br>';
    echo date('d/m/Y H:i'); // d/m/Y || H:i
    //TIMEZONES
    echo '<br>';
    echo date_default_timezone_get();
    echo '<br>';
    //date_default_timezone_set('America/Sao_Paulo');
    echo date('d/m/Y H:i') */

    // Calculos Entre Datas
    $data_inicial = '2025-04-24';
    $data_final = '2025-05-15';
    //timestamp
    //01/01/1970
    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);
    echo $data_inicial.' - '.$time_inicial;
    echo '<br>';
    echo $data_final.' - '.$time_final;

    $diferenca_times = $time_final - $time_inicial; //abs

    echo '<br>';
    echo 'A diferença de segundos entre a data inicial e final é '.$diferenca_times;
    
    $segundos_existem_dias = 24 * 60 * 60;
    
    echo '<br>';
    echo 'Um dia possui '.$segundos_existem_dias.' segundos';

    $diferenca_de_dias_entre_datas = $diferenca_times / $segundos_existem_dias;

    echo '<br>';
    echo 'A diferença em dias é: '.$diferenca_de_dias_entre_datas;
    ?> -->
    <!-- _____________AULA 32 ARRAY BÁSICO - INTRODUÇÃO_____________ -->
    <!-- Concluido -->
    <!-- _____________AULA 33 ARRAY BÁSICO - PRÁTICA_____________ -->
    <!-- <?php
        // Tipos de ARRAY:
        // sequenciais(numéricos)
        $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
        $lista_frutas[] = 'Abacaxi';
        
        echo '<pre>';
            var_dump($lista_frutas);//BLOCO DE RECURSOS DE TESTES
        echo '<pre>';
        echo '<hr>'; 
            print_r($lista_frutas);
        echo '<pre>'; 
        
        echo $lista_frutas[2];
        
        // associativos
        $lista_frutas = ['a' => 'Banana', 'b' => 'Maçã', 'c' => 'Morango', '2' => 'Uva'];
        $lista_frutas['w'] = 'Abacate';
        echo '<pre>';
            var_dump($lista_frutas);
        echo '<pre>';
        echo $lista_frutas['w']; 
        
    ?> -->
    <!-- _____________AULA 34 ARRAY MULTIDIMENSIONAL_____________ -->
    <!-- <?php 
        $lista_coisas = [];
        $lista_coisas['frutas'] = [1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva'];
        $lista_coisas['pessoas'] = [1 => 'Lucas', 2 => 'Arthur', 3 => 'Gab'];

        echo '<pre>';
            print_r($lista_coisas);
        echo '<pre>';
        echo '<hr>';
        echo $lista_coisas['pessoas'][1];
    ?> -->
    <!-- _____________AULA 35 ARRAY - MÉTODOS DE PESQUISA_____________ -->
    <!-- <?php 
        // in_array() -> T || F P/ a existência do que está sendo procurado
        // array_search() -> Retorna o indice do valor pesquisado, caso ele exista
        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';
        
        //$existe = in_array('Banana', $lista_frutas); // T -> texto = 1 || F -> texto = vazio

        $existe = array_search('Uva', $lista_frutas);
        if($existe != null){
            echo 'Este produto existe';
        }else{
            echo 'Este Produto Não Existe';
        }

        $lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['Lucas', 'Arthur', 'Gab']];

        echo '<pre>';
            print_r($lista_coisas);
        echo '</pre>';
        
        echo in_array('Uva', $lista_coisas['frutas']);
    ?> -->
    <!-- _____________AULA 36 EXTRA - FALSE, NULL E EMPTY_____________ -->
    <!-- <?php 
        // False (T/F) -> tipo de variavel boolean
        // null e empty -> valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;
        //valores null
        if(is_null($funcionario1)){
            echo 'Esta variavel é NULL';
        }else{
            echo 'Esta variavel não é null';
        }
        echo '<br>';
        if(is_null($funcionario2)){
            echo 'Esta variavel é null';
        }else{
            echo 'Esta variavel não é null';
        }
        echo '<br>';
        if(is_null($funcionario3)){
            echo 'Esta variavel é null';
        }else{
            echo 'Esta variavel não é null';
        }
        //Valores empty
        echo '<br>';
        if(empty($funcionario1)){
            echo 'Esta variavel é EMPTY';
        }else{
            echo 'Esta variavel não é EMPTY';
        }
        echo '<br>';
        if(empty($funcionario2)){
            echo 'Esta variavel é EMPTY';
        }else{
            echo 'Esta variavel não é EMPTY';
        }
        echo '<br>';
        if(empty($funcionario3)){
            echo 'Esta variavel é EMPTY';
        }else{
            echo 'Esta variavel não é EMPTY';
        }
    ?> -->
    <!-- _____________AULA 37 FUNÇÕES NATIVAS PARA MANIPULAR ARRAYS_____________ -->
    <!-- <?php 
        $array = ['teclado', 'mouse'];
        $retorno = is_array($array);

        if($retorno){
            echo 'Sim, é um array';
        }else{
            echo 'Não é um array';
        }
        $array = [1 => 'a', 7 => 'b', 18 => 'c'];
        echo '<pre>';
            print_r($array);
        echo '</pre>';
        $chaves_array = array_keys($array);
        echo '<pre>';
            print_r($chaves_array);
        echo '</pre>';
        $array = ['teclado', 'mouse', 'monitor', 'cabo displayport', 'gabinete', 'fone'];
        echo '<pre>';
            print_r($array);
        echo '</pre>';
        sort($array);
        echo '<pre>';
            print_r($array);
        echo '</pre>';
        $array = ['teclado', 'mouse', 'monitor', 'cabo displayport', 'gabinete', 'fone'];
        echo '<pre>';
            print_r($array);
        echo '</pre>';
        asort($array);
        echo '<pre>';
            print_r($array);
        echo '</pre>';
        $array = ['teclado', 'mouse', 'monitor', 'cabo displayport', 'gabinete', 'fone'];
        echo '<pre>';
            print_r($array);
            echo count($array);
        echo '</pre>';
        $array1 = ['MacOs', 'Windows'];
        $array2 = ['Linux'];
        $array3 = ['teclado', 'mouse', 'monitor', 'cabo displayport', 'gabinete', 'fone'];
        $novo_array = array_merge($array1, $array2, $array3);
        echo '<pre>';
            print_r($novo_array);
        echo '</pre>';
        $string = '26/04/2025';
        $array_retorno = explode('/', $string);
        echo '<pre>';
            echo $string;
            print_r($array_retorno);
            echo $array_retorno[2].'/'.$array_retorno[1].'/'.$array_retorno[0];
        echo '</pre>';
        $array = ['a', 'b', 'x', 'y'];
        $string_retorno = implode(',', $array);
        echo $string_retorno;
    ?> -->
    <!-- _____________AULA 38 LOOPS PARTE 1 - INTRODUÇÃO_____________ -->
    <!-- Concluido -->
    <!-- _____________AULA 39 LOOPS PARTE 2 - WHILE_____________ -->
    <!-- <?php
        $num = 1;
        //Operadores de comparação || Lógicos
        echo 'Inicio Loop <br>';
        while($num < 10){
            $num++; // Criterio de parada
            if($num == 2 || $num == 6){
                continue;
            }
            echo $num.'<br>';
            if($num > 10){
                break;
            }
            
        }
        echo 'Fim Loop';
    ?> -->
    <!-- _____________AULA 40 LOOPS PARTE 3 - DO WHILE_____________ -->
    <!-- <?php 
        $x = 1;
        do{
            echo "X = $x <br>";
            $x++; // Criterio de parada
            //break;
            //continue;
        }while($x < 9);
        echo '<br>';
        while($x < 9){
            echo 'Entrou nowhile';
        }
    ?> -->
    <!-- _____________AULA 41 LOOPS PARTE 4 - FOR_____________ -->
    <!-- <?php 
        // FOR -> Variavel; Condicao; Incremento
        for($x = 1; $x <= 10; $x++){
            echo $x.'<br>';
        }
        for($x = 11; $x > 0; $x--){
                //break;
                //continue;
            echo $x.'<br>';
        }
    ?> -->
    <!-- _____________AULA 42 PRATICANDO UM POUCO - PERCORRENDO ARRAYS COM WHILE, DO WHILE E FOR_____________ -->
    <!-- <?php 
        $registros =[
            ['titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'],
            ['titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'],
            ['titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'],
            ['titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4']
        ];
        echo '<pre>';
            print_r($registros);
        echo '</pre>';
        echo '<br>';
        echo 'O array possui: '.count($registros).' registros';
        echo '<br>';
        // $idx = 0;
        while($idx < count($registros)){
            echo '<h3>'.$registros[$idx]['titulo']. '</h3>';
            echo '<p>'.$registros[$idx]['conteudo']. '</p>';
            echo '<hr>';
            $idx++;
        }
        do{
            echo '<h3>'.$registros[$idx]['titulo']. '</h3>';
            echo '<p>'.$registros[$idx]['conteudo']. '</p>';
            echo '<hr>';
            $idx++;
        }while($idx < count($registros));
        for($idx = 0; $idx < count($registros); $idx++){
            echo '<h3>'.$registros[$idx]['titulo']. '</h3>';
            echo '<p>'.$registros[$idx]['conteudo']. '</p>';
            echo '<hr>';
        }
    ?> -->
    <!-- _____________AULA 43 LOOPS PARTE 5 - FOREACH_____________ -->
    <!-- <?php 
        $itens =['sofá', 'mesa', 'cadeira', 'fogão', 'geladeira'];
        echo '<pre>';
            print_r($itens);
        echo '</pre>';
        foreach($itens as $item){
            echo "$item ";
            if($item == 'mesa'){
                echo ' (*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)';
            }
            echo'<br>';
        }
    ?> -->
    <!-- _____________AULA 44 PRATICANDO UM POUCO - FOREACH EM ARRAYS ASSOCIATIVOS E FOEACH ENCADEADOS_____________ -->
    <!-- <?php 
        $funcionarios = [
            ['nome' => 'João', 'salario' => 2500, 'data_nascimento' => '06/03/1970'],
            ['nome' => 'Maria', 'salario' => 3000], 
            ['nome' => 'Júlia', 'salario' => 2200]
        ];
        echo '<pre>';
            print_r($funcionarios);
        echo '</pre>';
        foreach($funcionarios as $idx => $funcionario){
            foreach($funcionario as $idx2 => $valor){
                echo "$idx2 - $valor <br>";
            }
            echo '<hr>';
        }
    ?> -->
    <!-- _____________AULA 45 APP HELP DESK - INSTRUÇÕES GERAIS_____________ -->
    <!-- Concluido -->
    <!-- _____________AULA 46 APP HELP DESK - INTRODUÇÃO_____________ -->
    <!-- Concluido -->
    <!-- _____________AULA 47 APP HELP DESK - INICIANDO PROJETO_____________ -->
    <!-- Concluido -->
    <!-- _____________AULA 48 APP HELP DESK - FORMULÁRIOS (DESENVOLVENDO OS METODOS GET E POST)_____________ -->
    <!-- Concluido -->
    <!-- _____________AULA 49 APP HELP DESK - AUTENTICANDO USUÁRIO_____________ -->
    
    <!-- _____________AULA 50 APP HELP DESK - PROTEGENDO PÁGINA RESTRITAS COM SESSION_____________ -->
    
    <!-- _____________AULA 51 INCORPORANDO SCRIPTS COM INCLUDE, INCLUDE_ONCE, REQUIRE E REQUIRE_ONCE_____________ -->
    
    <!-- _____________AULA 52 APP HELP DESK - REFACTORING DO PROJETO COM REQUIRE_ONCE_____________ -->
    
    <!-- _____________AULA 53 APP HELP DESK - NAVEGAÇÃO ENTRE PÁGINAS_____________ -->
    
    <!-- _____________AULA 54 APP HELP DESK - ENCERRANDO SESSÃO (LOGOFF)_____________ -->
    
    <!-- _____________AULA 55 APP HELP DESK - REGISTRANDO CHAMADOS_____________ -->
    
    <!-- _____________AULA 56 APP HELP DESK - CONSULTANDO CHAMADOS_____________ -->
    
    <!-- _____________AULA 57 APP HELP DESK - APLICANDO CONTROLE DE PERFIL DE USUÁRIO_____________ -->
    
    <!-- _____________AULA 58 APP HELP DESK - SEGURANÇA NO BACK-END DE APLICAÇÕES WEB_____________ -->
    

</body>
</html>