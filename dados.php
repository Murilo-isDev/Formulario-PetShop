<?php
 
 $nome = $_POST['campoNome'];
 $raca = $_POST['campoRaca'];
 $cor = $_POST['campoCor'];
 $obs = $_POST['campoObs'];
 $tamanho = $_POST['campoTamanho'];
 $especie = $_POST['campoEspecie'];
 
 $especies = [
     "1" => "Cachorro",
     "2" => "Gato",
     "3" => "Pássaro",
     "4" => "Ramster",
     "5" => "Outro"
 ];
 
 $especieSelecionada = isset($especies[$especie]) ? $especies[$especie] : "Não especificado";
 
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Dados</title>
    </head>

    <body>
        <h1>RECEBEMOS O CADASTRO!!!
            <br>
            Obrigado pelas informações do(a): <h1><?php echo$nome; ?></h1></p>
        </h1>
        <p><b>Nome:</b><?php echo$nome; ?></p>
        <p><b>Raça:</b><?php echo$raca; ?></p>
        <p><b>Cor:</b><?php echo$cor; ?></p>
        <p><b>Observação:</b><?php echo$obs; ?></p>
        <p><b>Tamanho:</b><?php echo$tamanho; ?></p>
        <p><b>Espécie:</b> <?php echo $especieSelecionada; ?></p>

    </body>

</html>