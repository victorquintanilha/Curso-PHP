<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nome = "Guanabara";
        $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT); // center ou left
        print("Meu professor $novo é inteligente!");
    ?>
</div>
</body>
</html>