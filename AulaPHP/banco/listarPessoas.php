<?php
require 'conexao.php';
$con = new Conexao('root', '');
$pessoas = $con->listarPessoas();

?>
<html>
    <head>
        <title>Lista de Pessoas</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <table class="table table-hover">
            <tr>
                <th>CPF:</th>
                <th>Nome:</th>
                <th>E-mail:</th>
            </tr>
            <?php foreach($pessoas as $p) { ?>
            <tr>
                <td><?php echo $p['cpf']; ?></td>
                <td><?php echo $p['nome']; ?></td>
                <td><?php echo $p['email']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
