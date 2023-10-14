<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 05 -POO</title>
    </head>
    <body>
        <pre>
        <?php 
        require_once 'ContaBanco.php';
     $contaBanco = new ContaBanco($numConta , $tipo ,
      $dono , $saldo , $status);
         
        print_r ($contaBanco);       
        ?>
        </pre>
    </body>
</html>