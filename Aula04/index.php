<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04 -POO</title>
    </head>
    <body>
        <pre>
        <?php 
        require_once 'Caneta.php';
     $c1 = new Caneta ();
    $c1->setModelo("Bic");
    $c1->setPonta(0.5);
    $c1->setCor("Azul");
    $c1->tampada = true;
        print_r($c1);      
        ?>
        </pre>
    </body>
</html>