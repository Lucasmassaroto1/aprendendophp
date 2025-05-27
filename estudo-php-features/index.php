<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos PHP features</title>
</head>
<body>
    <!-- AULA 1 ARGUMENTOS NOMEADOS -->
    <!-- <?php 
        /* function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = ""){
            echo "Destinatários: ".$destinatarios."<br>";
            echo "CC: ".$cc."<br>";
            echo "Assunto: ".$assunto."<br>";
            echo "Mensagem: ".$mensagem."<br>";
        }
        sendEmail(
            destinatarios: "lucasmassaroto17@gmail.com",
            cc: "powerdroid1717@gmail.com",
            assunto: "Argumentos nomeados",
            mensagem: "Dominando a features de argumentos nomeados do PHP 8"
        );
        echo '<hr>';
        // convencional -> respeitando a ordem dos parametros
        sendEmail(
            "lucasmassaroto17@gmail.com",
            "powerdroid1717@gmail.com",
            "Argumentos nomeados",
            "Dominando a features de argumentos nomeados do PHP 8"
        );
        echo '<hr>';
        sendEmail(
            "lucasmassaroto17@gmail.com",
            "Argumentos nomeados",
            "Dominando a features de argumentos nomeados do PHP 8"
        ); */
    ?> -->
    <!-- AULA 2 PROMOÇÃO DE PROPRIEDADE DE CONSTRUTOR -->
    <!-- <?php 
        /* class Produto{
            public string $nome = '';
            public float $value = 0;
            public function __construct($nome, $value){
                $this->nome = $nome;
                $this->value = $value;
            }
        }
        class Produto{
            public function __construct(
                public string $nome = '',
                public float $value = 0
            ){}
        }

        $produto = new Produto('celular', 1500);
        echo "Produto: ".$produto->nome;
        echo '<br>';
        echo 'Valor: '.$produto->value; */
    ?> -->
    <!-- AULA 3 COMBINANDO AS FEATURES DE "ARGUMENTOS" COM "PROPRIEDADE DE CONSTRUTOR"-->
    <!-- <?php 
        /* class Produto{
            public function __construct(public string $nome = '', public float $value = 0){}
        }

        $produto = new Produto(value: 1500, nome: 'celular');
        echo "Produto: ".$produto->nome;
        echo '<br>';
        echo 'Valor: '.$produto->value; */
    ?> -->
    <!-- AULA 4 CORRESPONDÊNCIA DE EXPRESSÃO-->
    <!-- <?php 
        /* $busca = 30;
        switch($busca){ // faz comparação de == (Igualdade)
            case '1':
                $retornoSwitch = 'Encontrou o texto 1;';
                break;
            case 2:
                $retornoSwitch = 'Encontrou o texto 2;';
                break;
            default:
                $retornoSwitch = 'Não encontrou;';
        }
        echo 'Resultado switch: '.$retornoSwitch;
        echo'<hr>';

        $retornoMatch = match($busca){ // Faz a comparação por identidade || estrita (===)
            '1' => 'Encontrou o texto 1',
            1 => 'Encontrou o número 1',
            '2', 2 => 'Encontrou o número 2 ou o texto 2',
            default => 'Não Encontrou'
        };

        //Match com condicionais e operações lógicas
        $retornoMatch = match(true){
            $busca < 20 => 'Encontrou',
            $busca >= 20 && $busca <= 30 => 'Encontrou um valor maior que 20 e menor que 30',
            default => 'Não Encontrou'
        };


        echo 'Resultado match: '.$retornoMatch;
        echo'<hr>'; */
    ?> -->
    <!-- AULA 5 OPERADOR NULLSAFE-->
    <!-- <?php 
        /* $objeto = null;
        if(isset($objeto) && $objeto != null){
            $objeto->total();
        }
        // $objeto?->total();
        // Operador ?(Nullsafe)
        class Functionario{
            public function __construct(private string $nome = '', private float $salario = 0){}
            public function info(){
                return "Nome: $this->nome - Salario: $this->salario";
            }
        }
        class FolhaPagamento{
            private $Functionarios = null;

            public function __construct(){
                $this->Functionarios = [
                    new Functionario('Lucas', 100),
                    new Functionario('massaroto', 1200),
                ];
            }
            public function getTotalFuncionarios(){
                return count($this->Functionarios);
            }
            public function getFuncionarios(){
                return $this->Functionarios[1];
            }
        }
        $folhaPagamento = new FolhaPagamento;
        echo $folhaPagamento->getTotalFuncionarios();
        echo '<br>';
        print_r($folhaPagamento?->getFuncionarios()->info()); */
    ?> -->
    <!-- AULA 6 COMPARAÇÕES MAIS SENSATAS ENTRE STRINGS E NÚMEROS-->
   <!--  <?php 
        /* echo '0 == "0": '.(0 == "0");                // TRUE   TRUE
        echo '<br>';
        echo '0 == "0.0": '.(0 == "0.0");            // TRUE   TRUE
        echo '<br>';
        echo '0 == "teste": '.(0 == "teste");        // TRUE   FALSE
        echo '<br>';
        echo '0 == "": '.(0 == "");                  // TRUE   FALSE
        echo '<br>';
        echo '50 == "50": '.(50 == "50");              // TRUE   TRUE
        echo '<br>';
        echo '50 == "50teste": '.(50 == "50teste");    // TRUE   FALSE */
    ?> -->
</body>
</html>