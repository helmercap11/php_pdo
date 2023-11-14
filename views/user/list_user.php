<?php
require_once'../../conexao/conexao.php';
$conexao=Connection::getConn();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/main.css">
</head>

<body>
    <header class="header-title">Usuários</header>

    <main>
        <table id="tabelaEstudante" class="tabela">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Contacto</th>
                    <th>Morada</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "select * from usuario";
                $seleciona =$conexao->prepare($query);
                $seleciona->execute();

                while($dados = $seleciona->fetch(PDO::FETCH_OBJ)){
                    
                 ?>

                <tr>
                    <td>
                        <?php echo $dados->idusuario ?>
                    </td>
                    <td><?php echo $dados->nome ?></td>
                    <td><?php echo $dados->email ?></td>
                    <td><?php echo $dados->senha ?></td>
                    <td><?php echo $dados->contacto ?></td>
                    <td><?php echo $dados->morada ?></td>
                    <td>
                        <button type="button" class="button green" id="edit-${index}">Editar</button>
                        <button type="button" class="button red" id="delete-${index}">Deletar</button>
                    </td>
                </tr>
                <?php  }?>
            </tbody>
        </table>
</body>

</html>