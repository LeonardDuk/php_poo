<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03 -POO</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->modelo = "BIC cristal";
        $c1->cor = "Azul";
        //$c1->ponta = 0.5 ;
        // $c1->carga = 99;
        // $c1->tampada = true;
        $c1->rabiscar();
        $c1->tampar();
        print_r($c1);

        echo "<br>";
         $c2 = new Caneta;
        $c2->cor = "verde";
        $c2->carga = 50;
        $c2->tampar();
        print_r($c2);
        ?>
        </pre>
    </body>
</html>