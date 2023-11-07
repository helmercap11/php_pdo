<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <header class="header-title">Cadastrar Usuário</header>

    <main>
        <form action="../controller/usuarioController.php?p=salvar" method="post">
            <input type="text" name="nome" placeholder="Nome"> <br><br>
            <input type="email" name="email" placeholder="exemplo@gmail.com"> <br><br>
            <input type="text" name="senha" placeholder="palavra passe"> <br><br>
            <input type="text" name="contacto" placeholder="999 999 999"> <br><br>
            <input type="text" name="morada" placeholder="endereço"> <br><br>
            <button type="submit" class="button green" id="edit-${index}">Salvar</button>
        </form>
    </main>
    <footer>
        Copyright &copy; Helmer Capassola
    </footer>
</body>

</html>