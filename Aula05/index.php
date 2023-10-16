<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Project Banco</title>
    </head>
    <body>
        <pre>
        <?php 
        require_once 'ContaBanco.php';
     $contaBanco = new ContaBanco();
    
          print_r ($contaBanco);       
        ?>
        </pre>
    </body>
</html>