<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Encapsulamento</title>
</head>
<body>
  <h1>Projeto Controle Remoto</h1>
    <pre>
        <?php 
            require_once 'controleRemoto.php';
            $controleRemoto = new controleRemoto();
            $controleRemoto->ligar();
            // $controleRemoto->desligar();
            $controleRemoto->maisVolume();
            // $controleRemoto->menosVolume();
            $controleRemoto->ligarMudo();
            $controleRemoto->desligarMudo();
            $controleRemoto->play();
            //$controleRemoto->pause();
            $controleRemoto->abrirMenu();
            $controleRemoto->fecharMenu();
        ?>
    </pre>
</body>
</html>