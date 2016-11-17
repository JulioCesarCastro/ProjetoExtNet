<?php

 if(!file_exists('registros.txt'))
     die('Registros não encontrados');

 $file = fopen('registros.txt','r');

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exibir Dados</title>
</head>
<body>

<table border="1">
    <tr>
        <td>Cod</td>
        <td>Nome</td>
        <td>Arquivos</td>
    </tr>
    <?php
        while (!feof($file)):
            $stringDados = fgets($file);
            $dados = unserialize($stringDados);
            if($dados):
    ?>
            <tr>
                <td><?= $dados['codigo']?></td>
                <td><?= $dados['nome']?></td>
                <td><?php
                        foreach ($dados['arquivos'] as $arquivo)
                            echo $arquivo."<BR>";
                    ?>
                </td>
            </tr>
    <?php
            endif;
             endwhile;


        fclose($file);
    ?>

</table>
<p><a href="exercicio9.php"> Voltar </a></p>
</body>
</html>
