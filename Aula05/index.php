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
     $contaBancoJubileu = new ContaBanco();
     $contaBancoJubileu->abrirConta("CC");
     $contaBancoJubileu->setdono("Jubileu");
     $contaBancoJubileu->setnumConta("24589-7");
     $contaBancoJubileu->depositar(300);
     $contaBancoJubileu->pagarMensal();
     $contaBancoJubileu->fecharConta();
     $contaBancoJubileu->sacar(338);
     $contaBancoCreuza = new ContaBanco();
     $contaBancoCreuza->abrirConta("CP");
     $contaBancoCreuza->setdono("Creuza");
     $contaBancoCreuza->setnumConta("97325-4");
     $contaBancoCreuza->depositar(500);
     $contaBancoCreuza->sacar(630);
     $contaBancoCreuza->pagarMensal();
     $contaBancoCreuza->fecharConta();
          print_r ($contaBancoJubileu ); 
          print_r($contaBancoCreuza);      
        ?>
        </pre>
    </body>
</html>