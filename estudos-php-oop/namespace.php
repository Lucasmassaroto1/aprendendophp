<?php 
    require './biblioteca/lib1/lib1.php';
    require './biblioteca/lib2/lib2.php';

    use A\Client as C1;
    use B\Client as C2;

    $c = new C1();
    print_r($c);
    echo $c->__get('nome');
?>